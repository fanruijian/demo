<?php
namespace app\utils;

class GEO {
    public $cnGeo = [
        ['id' => 'CNFJ0000', 'name' => '中国福建'],
        ['id' => 'CNGD0000', 'name' => '中国广东'],
        ['id' => 'CNBJ0000', 'name' => '中国北京'],
        ['id' => 'CNNM0000', 'name' => '中国内蒙古'],
        ['id' => 'CNNMCF00', 'name' => '中国内蒙古赤峰'],
        ['id' => 'CNNMEE00', 'name' => '中国内蒙古鄂尔多斯'],
        ['id' => 'CNNMWM00', 'name' => '中国内蒙古乌兰察布'],
        ['id' => 'CNNMBY00', 'name' => '中国内蒙古巴彦淖尔'],
        ['id' => 'CNNMWH00', 'name' => '中国内蒙古乌海'],
        ['id' => 'CNNMBT00', 'name' => '中国内蒙古包头'],
        ['id' => 'CNNMXL00', 'name' => '中国内蒙古锡林郭勒盟'],
        ['id' => 'CNNMAL00', 'name' => '中国内蒙古阿拉善盟'],
        ['id' => 'CNNMHH00', 'name' => '中国内蒙古呼和浩特'],
        ['id' => 'CNNMXA00', 'name' => '中国内蒙古兴安盟'],
        ['id' => 'CNNMHL00', 'name' => '中国内蒙古呼伦贝尔'],
        ['id' => 'CNNMTL00', 'name' => '中国内蒙古通辽'],
        ['id' => 'CNHK0000', 'name' => '中国香港'],
        ['id' => 'CNTW0000', 'name' => '中国台湾'],
        ['id' => 'CNGZGY00', 'name' => '中国贵州贵阳'],
        ['id' => 'CNGZQN00', 'name' => '中国贵州黔南'],
        ['id' => 'CNGZTR00', 'name' => '中国贵州铜仁'],
        ['id' => 'CNGZBJ00', 'name' => '中国贵州毕节'],
        ['id' => 'CNNXYC00', 'name' => '中国宁夏银川'],
        ['id' => 'CNNX0000', 'name' => '中国宁夏'],
        ['id' => 'CNSDJN00', 'name' => '中国山东济南'],
        ['id' => 'CNJSNJ00', 'name' => '中国江苏南京'],
        ['id' => 'CNJSCZ00', 'name' => '中国江苏常州'],
        ['id' => 'CN000000', 'name' => '中国'],
        ['id' => 'CNAHCZ00', 'name' => '中国安徽滁州'],
        ['id' => 'CNHLHG00', 'name' => '中国黑龙江鹤岗'],
        ['id' => 'CNHLHE00', 'name' => '中国黑龙江哈尔滨'],
        ['id' => 'CNHLMD00', 'name' => '中国黑龙江牡丹江'],
        ['id' => 'CNHLSH00', 'name' => '中国黑龙江绥化'],
        ['id' => 'CNHLQQ00', 'name' => '中国黑龙江齐齐哈尔'],
        ['id' => 'CNHLSY00', 'name' => '中国黑龙江双鸭山'],
        ['id' => 'CNHLJX00', 'name' => '中国黑龙江鸡西'],
        ['id' => 'CNHLDQ00', 'name' => '中国黑龙江大庆'],
        ['id' => 'CNHLJM00', 'name' => '中国黑龙江佳木斯'],
        ['id' => 'CNHLHH00', 'name' => '中国黑龙江黑河'],
        ['id' => 'CNHLQT00', 'name' => '中国黑龙江七台河'],
        ['id' => 'CNHLYC00', 'name' => '中国黑龙江伊春'],
        ['id' => 'CNHL0000', 'name' => '中国黑龙江'],
        ['id' => 'CNHLDX00', 'name' => '中国黑龙江大兴安岭'],
        ['id' => 'CNSX0000', 'name' => '中国山西'],
        ['id' => 'CNXAXA00', 'name' => '中国陕西西安'],
        ['id' => 'CNXAWN00', 'name' => '中国陕西渭南'],
        ['id' => 'CNXAHZ00', 'name' => '中国陕西汉中'],
        ['id' => 'CNXASL00', 'name' => '中国陕西商洛'],
        ['id' => 'CNXAAK00', 'name' => '中国陕西安康'],
        ['id' => 'CNXAYL00', 'name' => '中国陕西榆林'],
        ['id' => 'CNXABJ00', 'name' => '中国陕西宝鸡'],
        ['id' => 'CNXAYA00', 'name' => '中国陕西延安'],
        ['id' => 'CNXAXY00', 'name' => '中国陕西咸阳'],
        //['id' => 'CNGDGZ00', 'name' => '中国广东广州'],
        //['id' => 'CNGDSZ00', 'name' => '中国广东深圳'],
        ['id' => 'CNGXNN00', 'name' => '中国广西南宁'],
        ['id' => 'CNGXGL00', 'name' => '中国广西桂林'],
        ['id' => 'CNHAZZ00', 'name' => '中国河南郑州'],
        ['id' => 'CNHALY00', 'name' => '中国河南洛阳'],
        ['id' => 'CNHAPD00', 'name' => '中国河南平顶山'],
        ['id' => 'CNHAZM00', 'name' => '中国河南驻马店'],
        ['id' => 'CNHAKF00', 'name' => '中国河南开封'],
        ['id' => 'CNHAAY00', 'name' => '中国河南安阳'],
        ['id' => 'CNHAXX00', 'name' => '中国河南新乡'],
        ['id' => 'CNHAJZ00', 'name' => '中国河南焦作'],
        ['id' => 'CNHAPY00', 'name' => '中国河南濮阳'],
        ['id' => 'CNHASM00', 'name' => '中国河南三门峡'],
        ['id' => 'CNHAXC00', 'name' => '中国河南许昌'],
        ['id' => 'CNHASQ00', 'name' => '中国河南商丘'],
        ['id' => 'CNHANY00', 'name' => '中国河南南阳'],
        ['id' => 'CNHAXY00', 'name' => '中国河南信阳'],
        ['id' => 'CNHAHB00', 'name' => '中国河南鹤壁'],
        ['id' => 'CNHALH00', 'name' => '中国河南漯河'],
        ['id' => 'CNHAZK00', 'name' => '中国河南周口'],
        ['id' => 'CNGZZY00', 'name' => '中国贵州遵义'],
        ['id' => 'CNGZLP00', 'name' => '中国贵州六盘水'],
        ['id' => 'CNGZQX00', 'name' => '中国贵州黔西南'],
        ['id' => 'CNGZQD00', 'name' => '中国贵州黔东南'],
        ['id' => 'CNGZAS00', 'name' => '中国贵州安顺'],
        ['id' => 'CNGDZQ00', 'name' => '中国广东肇庆'],
        ['id' => 'CNCQ0000', 'name' => '中国重庆'],
        ['id' => 'CNGDHZ00', 'name' => '中国广东惠州'],
        ['id' => 'CNGDYJ00', 'name' => '中国广东阳江'],
        ['id' => 'CNGDMM00', 'name' => '中国广东茂名'],
        ['id' => 'CNGDZJ00', 'name' => '中国广东湛江'],
        ['id' => 'CNGDZS00', 'name' => '中国广东中山'],
        ['id' => 'CNGDZH00', 'name' => '中国广东珠海'],
        ['id' => 'CNGDJM00', 'name' => '中国广东江门'],
        ['id' => 'CNGDDG00', 'name' => '中国广东东莞'],
        ['id' => 'CNGDQY00', 'name' => '中国广东清远'],
        ['id' => 'CNGDJY00', 'name' => '中国广东揭阳'],
        ['id' => 'CNGDST00', 'name' => '中国广东汕头'],
        ['id' => 'CNNXSZ00', 'name' => '中国宁夏石嘴山'],
        ['id' => 'CNNXWZ00', 'name' => '中国宁夏吴忠'],
        ['id' => 'CNNXGY00', 'name' => '中国宁夏固原'],
        ['id' => 'CNNXZW00', 'name' => '中国宁夏中卫'],
        ['id' => 'CNGDFS00', 'name' => '中国广东佛山'],
        ['id' => 'CNGDMZ00', 'name' => '中国广东梅州'],
        ['id' => 'CNGDSG00', 'name' => '中国广东韶关'],
        ['id' => 'CNGDHY00', 'name' => '中国广东河源'],
        ['id' => 'CNGDSW00', 'name' => '中国广东汕尾'],
        ['id' => 'CNYNKM00', 'name' => '中国云南昆明'],
        ['id' => 'CNYNXS00', 'name' => '中国云南西双版纳'],
        ['id' => 'CNYNWS00', 'name' => '中国云南文山'],
        ['id' => 'CNYNNJ00', 'name' => '中国云南怒江'],
        ['id' => 'CNYNLC00', 'name' => '中国云南临沧'],
        ['id' => 'CNYNZT00', 'name' => '中国云南昭通'],
        ['id' => 'CNYNBS00', 'name' => '中国云南保山'],
        ['id' => 'CNYNDL00', 'name' => '中国云南大理'],
        ['id' => 'CNYNYX00', 'name' => '中国云南玉溪'],
        ['id' => 'CNYNQJ00', 'name' => '中国云南曲靖'],
        ['id' => 'CNYN0000', 'name' => '中国云南'],
        ['id' => 'CNYNCX00', 'name' => '中国云南楚雄'],
        ['id' => 'CNYNDH00', 'name' => '中国云南德宏'],
        ['id' => 'CNYNHH00', 'name' => '中国云南红河'],
        ['id' => 'CNGDYF00', 'name' => '中国广东云浮'],
        ['id' => 'CNMO0000', 'name' => '中国澳门'],
        ['id' => 'CNHBWH00', 'name' => '中国湖北武汉'],
        ['id' => 'CNHBJZ00', 'name' => '中国湖北荆州'],
        ['id' => 'CNHBYC00', 'name' => '中国湖北宜昌'],
        ['id' => 'CNHBXF00', 'name' => '中国湖北襄樊'],
        ['id' => 'CNHBXG00', 'name' => '中国湖北孝感'],
        ['id' => 'CNHBHG00', 'name' => '中国湖北黄冈'],
        //['id' => 'CNHB9000', 'name' => '中国湖北直辖县级行政区划'],
        ['id' => 'CNHBHS00', 'name' => '中国湖北黄石'],
        ['id' => 'CNHBXN00', 'name' => '中国湖北咸宁'],
        ['id' => 'CNHBJM00', 'name' => '中国湖北荆门'],
        ['id' => 'CNHBSY00', 'name' => '中国湖北十堰'],
        ['id' => 'CNHBEZ00', 'name' => '中国湖北鄂州'],
        ['id' => 'CNGDCZ00', 'name' => '中国广东潮州'],
        ['id' => 'CNXZLS00', 'name' => '中国西藏拉萨'],
        ['id' => 'CNXZ0000', 'name' => '中国西藏'],
        ['id' => 'CNXZRG00', 'name' => '中国西藏日喀则'],
        ['id' => 'CNXZSN00', 'name' => '中国西藏山南'],
        ['id' => 'CNTJ0000', 'name' => '中国天津'],
        ['id' => 'CNSH0000', 'name' => '中国上海'],
        ['id' => 'CNHESJ00', 'name' => '中国河北石家庄'],
        ['id' => 'CNHEBD00', 'name' => '中国河北保定'],
        ['id' => 'CNFJFZ00', 'name' => '中国福建福州'],
        ['id' => 'CNFJNP00', 'name' => '中国福建南平'],
        ['id' => 'CNFJQZ00', 'name' => '中国福建泉州'],
        ['id' => 'CNFJPT00', 'name' => '中国福建莆田'],
        ['id' => 'CNFJXM00', 'name' => '中国福建厦门'],
        ['id' => 'CNFJND00', 'name' => '中国福建宁德'],
        ['id' => 'CNFJZZ00', 'name' => '中国福建漳州'],
        ['id' => 'CNFJSM00', 'name' => '中国福建三明'],
        ['id' => 'CNFJLY00', 'name' => '中国福建龙岩'],
        ['id' => 'CNHEHD00', 'name' => '中国河北邯郸'],
        ['id' => 'CNHELF00', 'name' => '中国河北廊坊'],
        ['id' => 'CNHETS00', 'name' => '中国河北唐山'],
        ['id' => 'CNSDWF00', 'name' => '中国山东潍坊'],
        ['id' => 'CNSDQD00', 'name' => '中国山东青岛'],
        ['id' => 'CNSDYT00', 'name' => '中国山东烟台'],
        ['id' => 'CNSDZB00', 'name' => '中国山东淄博'],
        ['id' => 'CNSDLC00', 'name' => '中国山东聊城'],
        ['id' => 'CNSDLW00', 'name' => '中国山东莱芜'],
        ['id' => 'CNSDLY00', 'name' => '中国山东临沂'],
        ['id' => 'CNSDJI00', 'name' => '中国山东济宁'],
        ['id' => 'CNSD0000', 'name' => '中国山东'],
        ['id' => 'CNSDTA00', 'name' => '中国山东泰安'],
        ['id' => 'CNSDBZ00', 'name' => '中国山东滨州'],
        ['id' => 'CNSDDY00', 'name' => '中国山东东营'],
        ['id' => 'CNSDWH00', 'name' => '中国山东威海'],
        ['id' => 'CNSDHZ00', 'name' => '中国山东菏泽'],
        ['id' => 'CNSDDZ00', 'name' => '中国山东德州'],
        ['id' => 'CNGSDX00', 'name' => '中国甘肃定西'],
        ['id' => 'CNGSTS00', 'name' => '中国甘肃天水'],
        ['id' => 'CNGSLZ00', 'name' => '中国甘肃兰州'],
        ['id' => 'CNGSLN00', 'name' => '中国甘肃陇南'],
        ['id' => 'CNGSGN00', 'name' => '中国甘肃甘南'],
        ['id' => 'CNGSLX00', 'name' => '中国甘肃临夏'],
        ['id' => 'CNGSBY00', 'name' => '中国甘肃白银'],
        ['id' => 'CNGSPL00', 'name' => '中国甘肃平凉'],
        ['id' => 'CNGSJC00', 'name' => '中国甘肃金昌'],
        ['id' => 'CNGSWW00', 'name' => '中国甘肃武威'],
        ['id' => 'CNGSJQ00', 'name' => '中国甘肃酒泉'],
        ['id' => 'CNGSJY00', 'name' => '中国甘肃嘉峪关'],
        ['id' => 'CNGS0000', 'name' => '中国甘肃'],
        ['id' => 'CNGSQY00', 'name' => '中国甘肃庆阳'],
        ['id' => 'CNGSZY00', 'name' => '中国甘肃张掖'],
        ['id' => 'CNAHHF00', 'name' => '中国安徽合肥'],
        ['id' => 'CNAHHZ00', 'name' => '中国安徽亳州'],
        ['id' => 'CNAHHN00', 'name' => '中国安徽淮南'],
        ['id' => 'CNAH0000', 'name' => '中国安徽'],
        ['id' => 'CNAHAQ00', 'name' => '中国安徽安庆'],
        ['id' => 'CNAHLA00', 'name' => '中国安徽六安'],
        ['id' => 'CNZJHZ00', 'name' => '中国浙江杭州'],
        ['id' => 'CNZJ0000', 'name' => '中国浙江'],
        ['id' => 'CNAHSZ00', 'name' => '中国安徽宿州'],
        ['id' => 'CNAHWH00', 'name' => '中国安徽芜湖'],
        ['id' => 'CNAHMA00', 'name' => '中国安徽马鞍山'],
        ['id' => 'CNAHXC00', 'name' => '中国安徽宣城'],
        ['id' => 'CNXA0000', 'name' => '中国陕西'],
        ['id' => 'CNJLCC00', 'name' => '中国吉林长春'],
        ['id' => 'CNJLJL00', 'name' => '中国吉林吉林'],
        ['id' => 'CNLN0000', 'name' => '中国辽宁'],
        ['id' => 'CNHNCS00', 'name' => '中国湖南长沙'],
        ['id' => 'CNHNHY00', 'name' => '中国湖南衡阳'],
        ['id' => 'CNHNZZ00', 'name' => '中国湖南株洲'],
        ['id' => 'CNHNCZ00', 'name' => '中国湖南郴州'],
        ['id' => 'CNHNYY00', 'name' => '中国湖南岳阳'],
        ['id' => 'CNHNSY00', 'name' => '中国湖南邵阳'],
        ['id' => 'CNHNLD00', 'name' => '中国湖南娄底'],
        ['id' => 'CNHNYZ00', 'name' => '中国湖南永州'],
        ['id' => 'CNHNXT00', 'name' => '中国湖南湘潭'],
        ['id' => 'CNHNCD00', 'name' => '中国湖南常德'],
        ['id' => 'CNHNHH00', 'name' => '中国湖南怀化'],
        ['id' => 'CNHNIY00', 'name' => '中国湖南益阳'],
        //['id' => 'CNHA9000', 'name' => '中国河南直辖县级行政区划'],
        ['id' => 'CNHA0000', 'name' => '中国河南'],
        ['id' => 'CNJSSZ00', 'name' => '中国江苏苏州'],
        ['id' => 'CNSXTY00', 'name' => '中国山西太原'],
        ['id' => 'CNJXNC00', 'name' => '中国江西南昌'],
        ['id' => 'CNSCLZ00', 'name' => '中国四川泸州'],
        ['id' => 'CNJSWX00', 'name' => '中国江苏无锡'],
        ['id' => 'CNJS0000', 'name' => '中国江苏'],
        ['id' => 'CNJSXZ00', 'name' => '中国江苏徐州'],
        ['id' => 'CNJSLY00', 'name' => '中国江苏连云港'],
        ['id' => 'CNJSYZ00', 'name' => '中国江苏扬州'],
        ['id' => 'CNJSSQ00', 'name' => '中国江苏宿迁'],
        ['id' => 'CNJSHA00', 'name' => '中国江苏淮安'],
        ['id' => 'CNJSTZ00', 'name' => '中国江苏泰州'],
        ['id' => 'CNJSNT00', 'name' => '中国江苏南通'],
        ['id' => 'CNJSYC00', 'name' => '中国江苏盐城'],
        ['id' => 'CNJSZJ00', 'name' => '中国江苏镇江'],
        ['id' => 'CNXJWL00', 'name' => '中国新疆乌鲁木齐'],
        //['id' => 'CNXJ9000', 'name' => '中国新疆直辖县级行政区划'],
        ['id' => 'CNXJKE00', 'name' => '中国新疆克孜勒苏柯尔克孜'],
        ['id' => 'CNXJKS00', 'name' => '中国新疆喀什'],
        ['id' => 'CNXJHT00', 'name' => '中国新疆和田'],
        ['id' => 'CNXJBY00', 'name' => '中国新疆巴音郭楞'],
        ['id' => 'CNXJEK00', 'name' => '中国新疆阿克苏'],
        ['id' => 'CNXJBE00', 'name' => '中国新疆博尔塔拉'],
        ['id' => 'CNXJTC00', 'name' => '中国新疆塔城'],
        ['id' => 'CNXJYL00', 'name' => '中国新疆伊犁'],
        ['id' => 'CNLNDL00', 'name' => '中国辽宁大连'],
        ['id' => 'CNQHXN00', 'name' => '中国青海西宁'],
        ['id' => 'CNJXJJ00', 'name' => '中国江西九江'],
        ['id' => 'CNJXJD00', 'name' => '中国江西景德镇'],
        ['id' => 'CNJXPX00', 'name' => '中国江西萍乡'],
        ['id' => 'CNJXXY00', 'name' => '中国江西新余'],
        ['id' => 'CNJXYC00', 'name' => '中国江西宜春'],
        ['id' => 'CNJXJA00', 'name' => '中国江西吉安'],
        ['id' => 'CNJXYT00', 'name' => '中国江西鹰潭'],
        ['id' => 'CNJXFZ00', 'name' => '中国江西抚州'],
        ['id' => 'CNJXSR00', 'name' => '中国江西上饶'],
        ['id' => 'CNJXGZ00', 'name' => '中国江西赣州'],
        ['id' => 'CNHBSZ00', 'name' => '中国湖北随州'],
        ['id' => 'CNHBES00', 'name' => '中国湖北恩施'],
        ['id' => 'CNHNXX00', 'name' => '中国湖南湘西'],
        ['id' => 'CNSDZZ00', 'name' => '中国山东枣庄'],
        ['id' => 'CNSDRZ00', 'name' => '中国山东日照'],
        ['id' => 'CNGXLZ00', 'name' => '中国广西柳州'],
        ['id' => 'CNGXYL00', 'name' => '中国广西玉林'],
        ['id' => 'CNGXHZ00', 'name' => '中国广西贺州'],
        ['id' => 'CNGXGG00', 'name' => '中国广西贵港'],
        ['id' => 'CNSCCD00', 'name' => '中国四川成都'],
        ['id' => 'CNSCMY00', 'name' => '中国四川绵阳'],
        ['id' => 'CNSCSN00', 'name' => '中国四川遂宁'],
        ['id' => 'CNSCBZ00', 'name' => '中国四川巴中'],
        ['id' => 'CNSCNJ00', 'name' => '中国四川内江'],
        ['id' => 'CNSCNC00', 'name' => '中国四川南充'],
        ['id' => 'CNSCDY00', 'name' => '中国四川德阳'],
        ['id' => 'CNSCGY00', 'name' => '中国四川广元'],
        ['id' => 'CNSCLS00', 'name' => '中国四川乐山'],
        ['id' => 'CNSCGA00', 'name' => '中国四川广安'],
        ['id' => 'CNSCZY00', 'name' => '中国四川资阳'],
        ['id' => 'CNSCXC00', 'name' => '中国四川凉山'],
        ['id' => 'CNSCZG00', 'name' => '中国四川自贡'],
        ['id' => 'CNSCYB00', 'name' => '中国四川宜宾'],
        ['id' => 'CNSCPZ00', 'name' => '中国四川攀枝花'],
        ['id' => 'CNSCDZ00', 'name' => '中国四川达州'],
        ['id' => 'CNSCYA00', 'name' => '中国四川雅安'],
        ['id' => 'CNSC0000', 'name' => '中国四川'],
        ['id' => 'CNHI0000', 'name' => '中国海南'],
        ['id' => 'CNHIHK00', 'name' => '中国海南海口'],
        ['id' => 'CNHISY00', 'name' => '中国海南三亚'],
        ['id' => 'CNGXHC00', 'name' => '中国广西河池'],
        ['id' => 'CNGXFC00', 'name' => '中国广西防城港'],
        ['id' => 'CNGXBH00', 'name' => '中国广西北海'],
        ['id' => 'CNGXBS00', 'name' => '中国广西百色'],
        ['id' => 'CNZJJH00', 'name' => '中国浙江金华'],
        ['id' => 'CNZJLS00', 'name' => '中国浙江丽水'],
        ['id' => 'CNGZ0000', 'name' => '中国贵州'],
        ['id' => 'CNHN0000', 'name' => '中国湖南'],
        ['id' => 'CNXJCJ00', 'name' => '中国新疆昌吉'],
        ['id' => 'CNHEHS00', 'name' => '中国河北衡水'],
        ['id' => 'CNZJWZ00', 'name' => '中国浙江温州'],
        ['id' => 'CNLNSY00', 'name' => '中国辽宁沈阳'],
        ['id' => 'CNLNPJ00', 'name' => '中国辽宁盘锦'],
        ['id' => 'CNJLSP00', 'name' => '中国吉林四平'],
        ['id' => 'CNHE0000', 'name' => '中国河北'],
        ['id' => 'CNAHHS00', 'name' => '中国安徽黄山'],
        ['id' => 'CNAHCO00', 'name' => '中国安徽池州'],
        ['id' => 'CNAHCH00', 'name' => '中国安徽巢湖'],
        ['id' => 'CNAHHB00', 'name' => '中国安徽淮北'],
        ['id' => 'CNAHFY00', 'name' => '中国安徽阜阳'],
        ['id' => 'CNAHTL00', 'name' => '中国安徽铜陵'],
        ['id' => 'CNAHBB00', 'name' => '中国安徽蚌埠'],
        ['id' => 'CNJLLY00', 'name' => '中国吉林辽源'],
        ['id' => 'CNJLYJ00', 'name' => '中国吉林延边'],
        ['id' => 'CNJLTH00', 'name' => '中国吉林通化'],
        ['id' => 'CNJLSY00', 'name' => '中国吉林松原'],
        ['id' => 'CNLNAS00', 'name' => '中国辽宁鞍山'],
        ['id' => 'CNLNCY00', 'name' => '中国辽宁朝阳'],
        ['id' => 'CNLNJZ00', 'name' => '中国辽宁锦州'],
        ['id' => 'CNLNTL00', 'name' => '中国辽宁铁岭'],
        ['id' => 'CNLNDD00', 'name' => '中国辽宁丹东'],
        ['id' => 'CNLNBX00', 'name' => '中国辽宁本溪'],
        ['id' => 'CNLNYK00', 'name' => '中国辽宁营口'],
        ['id' => 'CNLNFS00', 'name' => '中国辽宁抚顺'],
        ['id' => 'CNLNFX00', 'name' => '中国辽宁阜新'],
        ['id' => 'CNLNLY00', 'name' => '中国辽宁辽阳'],
        ['id' => 'CNLNJX00', 'name' => '中国辽宁葫芦岛'],
        ['id' => 'CNHNZJ00', 'name' => '中国湖南张家界'],
        ['id' => 'CNSXDT00', 'name' => '中国山西大同'],
        ['id' => 'CNSXCZ00', 'name' => '中国山西长治'],
        ['id' => 'CNSXQZ00', 'name' => '中国山西忻州'],
        ['id' => 'CNSXJZ00', 'name' => '中国山西晋中'],
        ['id' => 'CNSXLF00', 'name' => '中国山西临汾'],
        ['id' => 'CNSXYC00', 'name' => '中国山西运城'],
        ['id' => 'CNSXJC00', 'name' => '中国山西晋城'],
        ['id' => 'CNSXSZ00', 'name' => '中国山西朔州'],
        ['id' => 'CNSXYQ00', 'name' => '中国山西阳泉'],
        ['id' => 'CNSXLL00', 'name' => '中国山西吕梁'],
        //['id' => 'CNHI9000', 'name' => '中国海南直辖县级行政区划'],
        ['id' => 'CNHEZJ00', 'name' => '中国河北张家口'],
        ['id' => 'CNHEQH00', 'name' => '中国河北秦皇岛'],
        ['id' => 'CNXATC00', 'name' => '中国陕西铜川'],
        ['id' => 'CNZJTZ00', 'name' => '中国浙江台州'],
        ['id' => 'CNZJQZ00', 'name' => '中国浙江衢州'],
        ['id' => 'CNZJNB00', 'name' => '中国浙江宁波'],
        ['id' => 'CNZJJX00', 'name' => '中国浙江嘉兴'],
        ['id' => 'CNHEXT00', 'name' => '中国河北邢台'],
        ['id' => 'CNHECD00', 'name' => '中国河北承德'],
        ['id' => 'CNZJSX00', 'name' => '中国浙江绍兴'],
        ['id' => 'CNZJHU00', 'name' => '中国浙江湖州'],
        ['id' => 'CNZJZS00', 'name' => '中国浙江舟山'],
        ['id' => 'CNXJHM00', 'name' => '中国新疆哈密'],
        ['id' => 'CNXJTL00', 'name' => '中国新疆吐鲁番'],
        ['id' => 'CNXJKL00', 'name' => '中国新疆克拉玛依'],
        ['id' => 'CNYNLJ00', 'name' => '中国云南丽江'],
        ['id' => 'CNJX0000', 'name' => '中国江西'],
        ['id' => 'CNHECZ00', 'name' => '中国河北沧州'],
        ['id' => 'CNQHHX00', 'name' => '中国青海海西'],
        ['id' => 'CNQHHD00', 'name' => '中国青海海东'],
        ['id' => 'CNQHHB00', 'name' => '中国青海海北'],
        ['id' => 'CNQHHN00', 'name' => '中国青海海南'],
        ['id' => 'CNQHHH00', 'name' => '中国青海黄南'],
        ['id' => 'CNJLBS00', 'name' => '中国吉林白山'],
        ['id' => 'CNJLBC00', 'name' => '中国吉林白城'],
        ['id' => 'CNSCMS00', 'name' => '中国四川眉山'],
        ['id' => 'CNGXQZ00', 'name' => '中国广西钦州'],
        ['id' => 'CNGXWZ00', 'name' => '中国广西梧州'],
        ['id' => 'CNSCGZ00', 'name' => '中国四川甘孜'],
        ['id' => 'CNSCAB00', 'name' => '中国四川阿坝'],
        ['id' => 'CNHB0000', 'name' => '中国湖北'],
        ['id' => 'CNYNSM00', 'name' => '中国云南普洱'],
        ['id' => 'CNYNDQ00', 'name' => '中国云南迪庆'],
        ['id' => 'CNQH0000', 'name' => '中国青海'],
        ['id' => 'CNGX0000', 'name' => '中国广西'],
        ['id' => 'CNXJ0000', 'name' => '中国新疆'],
        ['id' => 'CNGXLB00', 'name' => '中国广西来宾'],
        ['id' => 'CNXJAL00', 'name' => '中国新疆阿勒泰'],
        ['id' => 'CNGXCZ00', 'name' => '中国广西崇左'],
        ['id' => 'CNJL0000', 'name' => '中国吉林'],
        ['id' => 'CNQHGL00', 'name' => '中国青海果洛'],
        ['id' => 'CNXZLZ00', 'name' => '中国西藏林芝'],
        ['id' => 'CNXZCD00', 'name' => '中国西藏昌都'],
        ['id' => 'CNXZNQ00', 'name' => '中国西藏那曲'],
        ['id' => 'CNXZAL00', 'name' => '中国西藏阿里'],
        ['id' => 'CNQHYS00', 'name' => '中国青海玉树'],
    ];

    protected $geoRank = [
        //'华北地区' => ['北京', '天津', '河北', '内蒙古', '山西', ],
        '华北地区' => ['天津', '河北', '内蒙古', '山西', ],
        '东北地区' => ['黑龙江', '吉林', '辽宁', ],
        //'华东地区' => ['上海', '江苏', '浙江', '安徽', '福建', '江西', '山东', ],
        '华东地区' => ['江苏', '浙江', '安徽', '福建', '江西', '山东', ],
        '华中地区' => ['河南', '湖北', '湖南', ],
        '华南地区' => ['广东', '广西', '海南', ],
        '西南地区' => ['重庆', '贵州', '四川', '云南', '西藏', ],
        '西北地区' => ['陕西', '甘肃', '宁夏', '青海', '新疆', ],
        '港澳台'   => ['香港', '澳门', '台湾', ],
    ];

    // 其它地区包含所有的国外地区
    public $rankedOtherArea = [
        'rank' => '其它地区',
        'cities' => [
            ['id' => 'AU000000,JP000000,TH000000,IN000000,MY000000,KR000000,PH000000,VN000000,FR000000,SE000000,IT000000,DE000000,GR000000,ES000000,AT000000,GB000000,NL000000,AE000000,IL000000,UA000000,CZ000000,RU000000,KZ000000,PT000000,SA000000,DK000000,IR000000,NO000000,US000000,CA000000,MX000000,SY000000,CY000000,CH000000,IQ000000,TR000000,RO000000,LB000000,HU000000,GE000000,AZ000000,PS000000,LT000000,OM000000,RS000000,FI000000,BE000000,BG000000,SI000000,MD000000,MK000000,EE000000,LI000000,HR000000,PL000000,BA000000,LV000000,JO000000,KG000000,IE000000,LY000000,AM000000,YE000000,BY000000,GI000000,LU000000,SK000000,MT000000,PR000000,VI000000,BO000000,NZ000000,SG000000,ID000000,NP000000,PK000000,BS000000,VC000000,CL000000,AR000000,DM000000,BD000000,TK000000,KH000000,PG000000,MV000000,NC000000,FJ000000,MN000000,WF000000,QA000000,IS000000,AL000000,SL000000,JE000000,SM000000,AX000000,AD000000,BH000000,FO000000,GL000000,GG000000,VA000000,IM000000,KW000000,MC000000,ME000000,TJ000000,TM000000,UZ000000,BR000000,BZ000000,ZA000000,EG000000,ZW000000,LR000000,KE000000,NG000000,GH000000,TZ000000,ZM000000,SN000000,MG000000,AO000000,NA000000,CI000000,SD000000,CM000000,MW000000,GA000000,ML000000,BJ000000,TD000000,BW000000,CV000000,RW000000,CD000000,UG000000,MZ000000,GM000000,LS000000,MU000000,DZ000000,GN000000,BF000000,SO000000,NE000000,CF000000,SZ000000,TG000000,BI000000,SC000000,MA000000,MR000000,DJ000000,CG000000,KM000000,RE000000,GQ000000,TN000000,NI000000,CR000000,PA000000,CU000000,KY000000,JM000000,VG000000,CO000000,GT000000,MH000000,PE000000,AQ000000,BM000000,BB000000,AW000000,AI000000,KN000000,GD000000,DO000000,PY000000,LC000000,MS000000,VE000000,TC000000,AG000000,TV000000,PF000000,SB000000,VU000000,AF000000,ER000000,TT000000,HT000000,EC000000,SH000000,FM000000,SV000000,HN000000,UY000000,LK000000,EH000000,CX000000,LA000000,IO000000,GU000000,WS000000,SR000000,CK000000,KI000000,NU000000,TO000000,TF000000,MQ000000,YT000000,NF000000,BN000000,AS000000,SJ000000,BT000000,BV000000,CC000000,ET000000,FK000000,GF000000,GP000000,GS000000,GW000000,GY000000,UM000000,PW000000,MP000000,PM000000,MF000000,MM000000,NR000000,SS000000,KP000000,ST000000,BQ000000', 
            'name' => '其它', 
            'sub' => [], 
            'status' => true],
        ]
    ];

    public $rankedMainCity = [
        'rank' => '一线城市',
        'cities' => [
            ['id' => 'CNBJ0000', 'name' => '北京', 'sub' => [], 'status' => true],
            ['id' => 'CNSH0000', 'name' => '上海', 'sub' => [], 'status' => true],
            ['id' => 'CNGDSZ00', 'name' => '深圳', 'sub' => [], 'status' => true],
            ['id' => 'CNGDGZ00', 'name' => '广州', 'sub' => [], 'status' => true],
        ],
    ];

    public $rankup = [];

    public $allCityName = [];
    public $leveledGeo = [];
    public $leveledGeoId = [];

    public $allGeoCode = [];
    public $allCityCode = [];

    public function __construct($geo=[]) {
        //if ($geo) $this->cnGeo = $geo;
        $this->getAllGeoCode();
        //$this->leveledGeo = $this->levelUp($this->cnGeo);
        $this->rankUp();
    }

    public function getAllGeoCode() {
        foreach($this->cnGeo as $geo) {
            $this->allGeoCode[] = $geo['id'];
            if (substr($geo['id'], 4, 2) != '00') {
                $this->allCityCode[] = $geo['id'];
            }
        }
    }

    public function levelUp($geos=[]) {
        if (empty($geos)) {
            $geos = $this->cnGeo;
        }

        $tops = [];
        $subs = [];
        $topGeoId = []; //只记录 id 的层级关系
        foreach ($geos as $area) {
            $geo = $area;
             
            //trim '中国'
            $len = mb_strlen($geo['name'], 'utf-8');
            $geo['name'] = mb_substr($geo['name'], 2, $len-2, 'utf-8');

            if (preg_match("/CN[\w]{2}0000/i", $geo['id'])) {
                $geo['sub'] = [];
                $tops[$geo['id']] = $geo;
            } else {
                $subs[] = $geo;
            }
        }

        foreach ($subs as $sub) {
            $topPrefix = substr($sub['id'], 0, 4);
            $city = $sub;
            $len = mb_strlen($city['name'], 'utf-8');
            $tlen = mb_strlen($tops[$topPrefix.'0000']['name'], 'utf-8');
            $city['name'] = mb_substr($city['name'], $tlen, $len-$tlen, 'utf-8');
            $tops[$topPrefix.'0000']['sub'][] = $city;
            $topGeoId[$topPrefix.'0000'][] = $city['id'];
        }
        $this->leveledGeoId = $topGeoId;
        $this->levelUp = array_values($tops);
        return $this->levelUp;
    }

    //rank up areas
    public function rankUp($geos=[]) {
        $rankUps = [];
        $levelUp = $this->levelUp($geos);
        foreach ($this->geoRank as $rank => $areas) {
            $rankUp['rank'] = $rank;
            foreach ($areas as $province) {
                foreach ($levelUp as $level) {
                    if (strstr($level['name'], $province)) {
                        $rankUp['cities'][] = $level; 
                        break;
                    }
                }
            } 
            $rankUps[] = $rankUp;
            $rankUp = [];
        }
        //$data = array_merge([$this->rankedMainCity], $rankUps);
        $data = $rankUps;
        $this->rankup = $data;
        return $data;
    }

    public function getAllCityName() {
        foreach ($this->levelUp as $lvl) {
            $subs = $lvl['sub'];
            if (!count($subs)) {
                $subs[] = $lvl;
            }
            foreach ($subs as $sub) {
                if ($sub['id'] != 'CN000000') {
                    $this->allCityName[$sub['id']] = $sub['name'];
                }
            }
        }
        $this->allCityName['CNGDGZ00'] = '广州';
        $this->allCityName['CNGDSZ00'] = '深圳';
        return $this->allCityName;
    }

    public function switchCodeToName($codeString) {
        return $this->switchBetweenCodeAndName($codeString);
    }

    public function switchNameToCode($nameString) {
        return $this->switchBetweenCodeAndName($nameString);
    }

    public function switchBetweenCodeAndName($keys, $isNameToCode=false) {
        $cities = $this->getAllCityName();
        if ($isNameToCode) $cities = array_flip($cities);
        $keys = explode(',', $keys);
        $values = [];
        foreach ($keys as $key) {
            $values[] = $cities[$key];
        }
        return implode(',', $values);
    }
}//end
