var pgUserTiming = pgUserTiming || {};
pgUserTiming.timingInfo = {
    totalTimePageOpened: performance.now(),
    timePageVisible: 0,
    lastCheckedTimestamp: 0
};
pgUserTiming.isPageVisibilitySupported = function () {
    if (typeof document.hidden !== "undefined") {
        return true;
    }else{
        return false;
    }
};
pgUserTiming.isPageVisible = function () {
    if (this.isPageVisibilitySupported() == true) {
        return !document.hidden;
    }else{
        return true;
    }
};
pgUserTiming.updateLastCheckedTimestamp = function (lastVisible){
    this.timingInfo.lastCheckedTimestamp = lastVisible;
}
pgUserTiming.getRoundedSeconds = function (timeInMills){
    return Math.round(timeInMills / 1000.0);
}

pgUserTiming.updatePageVisibilityTime = function () {
    var currentTimestamp = performance.now();
    var newTimingInterval = currentTimestamp - this.timingInfo.lastCheckedTimestamp;
    
    this.timingInfo.timePageVisible = this.timingInfo.timePageVisible + newTimingInterval;
    this.updateLastCheckedTimestamp(currentTimestamp);
};
pgUserTiming.updateTimingInfo = function () {
    //update all time
    this.timingInfo.totalTimePageOpened = performance.now();
    
    //update page visible time
    if(this.isPageVisible() == true){
        this.updatePageVisibilityTime();
        // console.log('yep visible!');
    }else{
        this.updateLastCheckedTimestamp(performance.now());
        // console.log('not visible!');
    }
};

pgUserTiming.getTimingLabel = function (millisecondsOnPage){
    var totalSecondsOnPage = this.getRoundedSeconds(millisecondsOnPage);
    totalSecondsOnPage = totalSecondsOnPage.toString() + ' Seconds';
    return totalSecondsOnPage;
}

pgUserTiming.sendTimingInfo = function () {
    console.log(this.timingInfo.totalTimePageOpened,this.timingInfo.timePageVisible);
    ga('send', {
        hitType: 'timing',
        timingCategory: 'User Time on Page',
        timingVar: 'Total Time on Page',
        timingValue: Math.floor(this.timingInfo.totalTimePageOpened),
        timingLabel: this.getTimingLabel(this.timingInfo.totalTimePageOpened)
    });

    ga('send', {
        hitType: 'timing',
        timingCategory: 'User Time on Page',
        timingVar: 'Visible Time on Page',
        timingValue: Math.floor(this.timingInfo.timePageVisible),
        timingLabel: this.getTimingLabel(this.timingInfo.timePageVisible)
    });
    console.log('timing sent');
}

setInterval(function(){ pgUserTiming.updateTimingInfo(); }, 500);
window.addEventListener("beforeunload", function(){ pgUserTiming.sendTimingInfo()} );