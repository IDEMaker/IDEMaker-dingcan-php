<?php

ini_set("display_errors", "on");

require_once dirname(__DIR__) . '/api_sdk/vendor/autoload.php';


use Aliyun\Core\Config;
use Aliyun\Core\Profile\DefaultProfile;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;
use Aliyun\Api\Sms\Request\V20170525\QuerySendDetailsRequest;

// 加载区域结点配置
Config::load();

/**
 * Class SmsDemo
 *
 * Created on 17/10/17.
 * 短信服务API产品的DEMO程序,工程中包含了一个SmsDemo类，直接通过
 * 执行此文件即可体验语音服务产品API功能(只需要将AK替换成开通了云通信-短信服务产品功能的AK即可)
 * 备注:Demo工程编码采用UTF-8
 */
class SmsSend
{
    protected static $config=array();
    static $acsClient = null;
    public  function __construct($config)
    {
        self::$config=$config;
    }


    /**
     * 取得AcsClient
     *
     * @return DefaultAcsClient
     */
    public static function getAcsClient() {
        //产品名称:云通信流量服务API产品,开发者无需替换
        $product = "Dysmsapi";

        //产品域名,开发者无需替换
        $domain = "dysmsapi.aliyuncs.com";

        // TODO 此处需要替换成开发者自己的AK (https://ak-console.aliyun.com/)
        $accessKeyId =self::$config['accessKeyId']; // AccessKeyId

        $accessKeySecret = self::$config['accessKeySecret']; // AccessKeySecret


        // 暂时不支持多Region
        $region = "cn-hangzhou";

        // 服务结点
        $endPointName = "cn-hangzhou";


        if(static::$acsClient == null) {

            //初始化acsClient,暂不支持region化
            $profile = DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);

            // 增加服务结点
            DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);

            // 初始化AcsClient用于发起请求
            static::$acsClient = new DefaultAcsClient($profile);
        }
        return static::$acsClient;
    }

    /**
     * 发送短信
     *
     * @param string $signName <p>
     * 必填, 短信签名，应严格"签名名称"填写，参考：<a href="https://dysms.console.aliyun.com/dysms.htm#/sign">短信签名页</a>
     * </p>
     * @param string $templateCode <p>
     * 必填, 短信模板Code，应严格按"模板CODE"填写, 参考：<a href="https://dysms.console.aliyun.com/dysms.htm#/template">短信模板页</a>
     * (e.g. SMS_0001)
     * </p>
     * @param string $phoneNumbers 必填, 短信接收号码 (e.g. 12345678901)
     * @param array|null $templateParam <p>
     * 选填, 假如模板中存在变量需要替换则为必填项 (e.g. Array("code"=>"12345", "product"=>"阿里通信"))
     * </p>
     * @param string|null $outId [optional] 选填, 发送短信流水号 (e.g. 1234)
     * @param string|null $smsUpExtendCode [optional] 选填，上行短信扩展码（扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段）
     * @return stdClass
     */
    public static function sendSms($phoneNumbers, $outId = null, $smsUpExtendCode = null) {

        // 初始化SendSmsRequest实例用于设置发送短信的参数
        $request = new SendSmsRequest();

        // 必填，设置雉短信接收号码
        $request->setPhoneNumbers($phoneNumbers);

        // 必填，设置签名名称

        $request->setSignName(self::$config['signName']);

        // 必填，设置模板CODE
        $request->setTemplateCode(self::$config['templateCode']);

        // 可选，设置模板参数
        $num=substr(time(),-1);
        $str="12345678910";
        $st=substr(rand($str,strlen($str)),-3);
        $stm=$num.=$st;
        $templateParam=array(
            "code"=>$stm
        );
        setSessions("send_code",md5($stm),60);
        $request->setTemplateParam(json_encode($templateParam));

        // 可选，设置流水号
        if($outId) {
            $request->setOutId($outId);
        }

        // 选填，上行短信扩展码
        if($smsUpExtendCode) {
            $request->setSmsUpExtendCode($smsUpExtendCode);
        }

        // 发起访问请求
        $acsResponse = static::getAcsClient()->getAcsResponse($request);

        // 打印请求结果
        // var_dump($acsResponse);

        return $acsResponse;

    }

    /**
     * 短信发送记录查询
     *
     * @param string $phoneNumbers 必填, 短信接收号码 (e.g. 12345678901)
     * @param string $sendDate 必填，短信发送日期，格式Ymd，支持近30天记录查询 (e.g. 20170710)
     * @param int $pageSize 必填，分页大小
     * @param int $currentPage 必填，当前页码
     * @param string $bizId 选填，短信发送流水号 (e.g. abc123)
     * @return stdClass
     */
    public function queryDetails($phoneNumbers, $sendDate, $pageSize = 10, $currentPage = 1, $bizId=null) {

        // 初始化QuerySendDetailsRequest实例用于设置短信查询的参数
        $request = new QuerySendDetailsRequest();

        // 必填，短信接收号码
        $request->setPhoneNumber($phoneNumbers);

        // 选填，短信发送流水号
        $request->setBizId($bizId);

        // 必填，短信发送日期，支持近30天记录查询，格式Ymd
        $request->setSendDate($sendDate);

        // 必填，分页大小
        $request->setPageSize($pageSize);

        // 必填，当前页码
        $request->setCurrentPage($currentPage);

        // 发起访问请求
        $acsResponse = static::getAcsClient()->getAcsResponse($request);

        // 打印请求结果
        // var_dump($acsResponse);

        return $acsResponse;
    }

}

//// 调用示例：
//set_time_limit(0);
//header('Content-Type: text/plain; charset=utf-8');
//
//$response = SmsDemo::sendSms(
//    "IDEMaker开源项目", // 短信签名
//    "SMS_110320070", // 短信模板编号
//    "18710051929", // 短信接收者
//    Array(  // 短信模板中字段的值
//        "code"=>"12345",
//    ),
//    "123"   // 流水号,选填
//);
//echo "发送短信(sendSms)接口返回的结果:\n";
//print_r($response);
//
//sleep(2);
//
//$response = SmsDemo::queryDetails(
//    "18710051929",  // phoneNumbers 电话号码
//    "20171114", // sendDate 发送时间
//    10, // pageSize 分页大小
//    1 // currentPage 当前页码
//    // "abcd" // bizId 短信发送流水号，选填
//);
//echo "查询短信发送情况(queryDetails)接口返回的结果:\n";
//print_r($response);
