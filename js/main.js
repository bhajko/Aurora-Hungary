const sideNav = document.querySelector('.sidenav');
M.Sidenav.init(sideNav, {});

const slider = document.querySelector('.slider');
M.Slider.init(slider, {
    indicators: false,
    height: 550,
    interval: 5000
});

const tabs = document.querySelector('.tabs');
M.Tabs.init(tabs, {});

M.toast({
    html: 'Email elküldve'
});