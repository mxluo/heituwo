<?php

class OptionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('options')->truncate();

        $data = array(
                    array(1, '公司简介', '<p><span style="font-family:微软雅黑, Microsoft YaHei;font-size:16px"><span style="line-height: 24px; text-indent: 28px; white-space: normal;"><span id="_baidu_bookmark_start_2" style="display: none; line-height: 0px;">‍</span></span><span id="_baidu_bookmark_start_4" style="display: none; line-height: 0px;">‍</span>青蛙设计公司（FROG DESIGN）在国际设计界最负盛名的<span style="font-family:微软雅黑, Microsoft YaHei;font-size:16pxfont-family:微软雅黑, Microsoft YaHei">欧洲</span><span style="line-height: 24px; text-indent: 28px; white-space: normal;">设计公司当数</span><span id="_baidu_bookmark_start_8" style="display: none; line-height: 0px;">‍</span><span style="font-family:微软雅黑, Microsoft YaHei;font-size:16pxfont-family:微软雅黑, Microsoft YaHei"><span id="_baidu_bookmark_start_6" style="display: none; line-height: 0px;">‍</span>德国<span id="_baidu_bookmark_end_7" style="display: none; line-height: 0px;">‍</span></span><span id="_baidu_bookmark_end_9" style="display: none; line-height: 0px;">‍</span><span style="line-height: 24px; text-indent: 28px; white-space: normal;">的青蛙设计公司。作为一家大型的综合性国际设计公司，青蛙设计以其前卫，甚至未来派的风格不断创造出新颖、奇特，充满情趣的产品。公司的业务遍及世界各地，包括AEG、苹果、柯达、索尼、奥林巴斯、AT&amp;T等跨国公司。青蛙公司的设计范围非常广泛，包括家具、交通工具、玩具、家用电器、展览、广告等，但90年代以来该公司最重要的领域是计算机及相关的电子产品，并取得了极大的成功，特别是青蛙的</span><span id="_baidu_bookmark_start_12" style="display: none; line-height: 0px;">‍</span><span style="font-family:微软雅黑, Microsoft YaHei;font-size:16pxfont-family:微软雅黑, Microsoft YaHei"><span id="_baidu_bookmark_start_10" style="display: none; line-height: 0px;">‍</span>美国<span id="_baidu_bookmark_end_11" style="display: none; line-height: 0px;">‍</span></span><span id="_baidu_bookmark_end_13" style="display: none; line-height: 0px;">‍</span><span style="line-height: 24px; text-indent: 28px; white-space: normal;">事务所成了美国高技术产品的设计最有影响的设计机构。</span></span><span id="_baidu_bookmark_end_5" style="display: none; line-height: 0px;">‍</span><span style="font-family: arial, 宋体, sans-serif; font-size: 14px; line-height: 24px; text-indent: 28px; white-space: normal;"><span id="_baidu_bookmark_end_3" style="display: none; line-height: 0px;">‍</span></span></p>'),
                    array(2, '企业文化', '<p><span style="font-family:微软雅黑, Microsoft YaHei;font-size:16px">&nbsp; &nbsp; &nbsp; 9年间，我们为100多名国际与本地客户的200余个产品提供了创新易用的设计方案，有效的提升了产品体验和客户品牌价值，并引领市场不断树立新的体验标杆。</span></p><p><span style="font-family:微软雅黑, Microsoft YaHei;font-size:16px">&nbsp; &nbsp; &nbsp; 我们整合商业思考，美学价值及技术实现，用设计的方法推动产品价值最大化，并与客户一起发现潜在商机。跨越技术与美学的局限，以文化、激情和实用性来定义产品。充分考虑产品各方面在生产工艺上的可行性等，以确保设计的一致性和高质量。</span></p>'),
                    array(3, '活力团队', '<p><img src="http://www.eicodesign.com/static/image/eico-staff.png" _src="http://www.eicodesign.com/static/image/eico-staff.png"/></p>'),
                    array(4, 'logo', 'http://localhost/xingzhe/public/frontend/img/logo.png'),
                    array(5, '二维码', 'http://localhost/xingzhe/public/frontend/img/twowei.png'),
                    array(6, '站点名称', '星哲'),
                    array(7, '站点口号', '致力于推广最新的设计理念'),
                    array(8, '商务合作', 'service@eicodesign.com'),
                    array(9, '其他咨询', 'info@eicodesign.com'),
                    array(10, '招聘', 'eicodesign.hr@gmail.com'),
                    array(11, '电话', '400-890-8989'),
                    array(12, '传真', '86-010-5825-7169'),
                    array(13, '地址', 'B座10层,北三环东路26号 环球贸易中心,北京,中国'),
                    array(14, '网站地图', '<p><iframe class="ueditor_baidumap" src="http://localhost/xingzhe/public/backend/js/umeditor/dialogs/map/map.html#center=116.417022,39.973835&zoom=18&width=528&height=338&markers=undefined,undefined" frameborder="0" width="532" height="342"></iframe></p>'),
                    array(15, '服务简介', '我们通过专业的流程与丰富的经验实现了在用户体验设计创新的承诺。8年间，数十个领域，百余国内外企业的成功合作验证了我们设计的价值。本地化执行力也在各项目中得以体现：本地用户与市场的理解、结果导向的设计流程，及快速迭代式设计方法。'),
                    array(16, '合作客户', '<h3 style="font-family: &#39;Microsoft YaHei&#39;, Arial; color: rgb(38, 38, 38); margin-top: 20px; margin-bottom: 10px; font-size: 24px; white-space: normal;">每个梦想，我们鼎力相助</h3><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">我们与全球最具影响力的品牌合作，也全力协助新兴品牌。</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">我们帮助客户实现用户体验价值突破。</p><p><img src="http://www.eicodesign.com/static/image/slo.gif" style="width: 1160px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; line-height: 28px; white-space: normal;"/></p>'),
                    array(17, '品牌＆营销', '<h4 class="blue" style="font-family: &#39;Microsoft YaHei&#39;, Arial; color: rgb(52, 156, 227); margin-top: 10px; margin-bottom: 10px; font-size: 18px; white-space: normal;">品牌 &amp;&amp; 营销</h4><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">从市场、技术及用户角度深度挖掘商业及用户体验的潜在机遇</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-市场竞争分析</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-市场趋势研究</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-用户行为研究</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-技术可行性分析及应用前瞻</p>'),
                    array(18, '产品＆包装', '<h4 class="blue" style="font-family: &#39;Microsoft YaHei&#39;, Arial; color: rgb(52, 156, 227); margin-top: 10px; margin-bottom: 10px; font-size: 18px; white-space: normal;">产品 &amp;&amp; 包装</h4><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">为产品与用户之间提供最有效的沟通方式及具有创新性和直觉性的信息组织方式。</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-品牌化图形界面定义</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-视觉设计指导规范</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-图形设计趋势研究</p>'),
                    array(19, '网络＆交互', '<h4 class="blue" style="font-family: &#39;Microsoft YaHei&#39;, Arial; color: rgb(52, 156, 227); margin-top: 10px; margin-bottom: 10px; font-size: 18px; white-space: normal;">网络 &amp;&amp; 交互</h4><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">创造值得关注的体验，将体验情感与品牌传达有效的整合并升华，传达品质与态度。</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-信息架构</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-任务流程</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-界面布局</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-关键场景</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-快速原型</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-用户测试</p>'),
                    array(20, '环境＆展示', '<h4 class="blue" style="font-family: &#39;Microsoft YaHei&#39;, Arial; color: rgb(52, 156, 227); margin-top: 10px; margin-bottom: 10px; font-size: 18px; white-space: normal;">环境 &amp;&amp; 展示</h4><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">挑战想象力，探索可能性，以时间纬度衡量产品使用体验及模型构建。</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-概念愿景设计</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-动态原型创建</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-品牌与功能演示</p><p style="margin-top: 0px; margin-bottom: 10px; color: rgb(38, 38, 38); font-family: &#39;Microsoft YaHei&#39;, Arial; font-size: 16px; line-height: 28px; white-space: normal;">-3D与AR用户界面研究</p>')
                );
        foreach ($data as $v) {
            System::create(array('id' => $v[0], 'option_name' => $v[1], 'option_value' => $v[2]));
        }        
    }

}