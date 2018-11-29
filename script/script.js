function checkLimit() {
    var crawlLimit = document.getElementById('crawl_limit').value;

    if (crawlLimit < 1 || crawlLimit > 8) {
        alert("Crawling cannot be greater than 8");
        return false;
    }
    return true;
}

function validate() {
    if (!checkLimit()) {
        return false;
    }
    return true;
}