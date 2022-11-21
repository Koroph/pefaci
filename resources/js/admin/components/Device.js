
export  default class Device {

    static isMobile(){
        return window.innerWidth < 539
    }
    static isTable(){
        return window.innerWidth > 540 && window.innerWidth < 1179
    }
    static isDesktop(){
        return window.innerWidth > 1180
    }
}
