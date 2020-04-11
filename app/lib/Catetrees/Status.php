<?php


class Status {

    /* API成功码
     * code 200-299
     * time 2020-04-11
     * author 苏振文
     * */
       const SUCCESS = [200,'Success',[]];

    /* API错误码
     * code 100-199
     * 接口通用错误码
     * time 2020-04-11
     * author 苏振文
     * */
       const UNKNOW_ERR = [101,'未知错误'];
       const ERR_URL = [102,'访问接口不存在'];
       const ERR_PARAMS = [103,'参数错误'];
       const ERR_REQUEST = [104,'请使用正确方式请求'];

     /*
      * API
      * code 300-399
      * time 2020-04-11
      * author 苏振文
      * */
       const ERR_NETWORK = [300,'网络问题，请稍后重试'];
       const ERR_USERNAME = [301,'账号错误'];
       const ERR_PASSWORD = [302,'密码错误'];
       const ERR_TOKEN = [303,'请求令牌有误'];
}
