<?php

use yii\db\Migration;

class m160718_102038_add_creative_cpe extends Migration
{
    public function up()
    {
        $this->addColumn('{{%creative}}', 'cpe_material_source', 'int(1) DEFAULT 0 COMMENT "0 上传素材， 1 自定义地址" after click_monitor_url');
        $this->addColumn('{{%creative}}', 'cpe_material_id', 'varchar(64) DEFAULT NULL COMMENT "素材id列表，逗号分隔" after cpe_material_source');
        $this->addColumn('{{%creative}}', 'cpe_format_id', 'varchar(32) NOT NULL DEFAULT "" COMMENT "1 flv, 2 webm, 3 mp4, 4 ogg 逗号分隔" after cpe_material_id');
        $this->addColumn('{{%creative}}', 'cpe_size_list', 'varchar(64) COMMENT "all cpe size_list 逗号分隔" after cpe_format_id');
        $this->addColumn('{{%creative}}', 'cpe_duration', 'varchar(32) COMMENT "cpe视频素材持续时长 逗号分隔" after cpe_size_list');
        $this->addColumn('{{%creative}}', 'cpe_file_url', 'text COMMENT "素材地址列表，逗号分隔" after cpe_duration');
        $this->addColumn('{{%creative}}', 'cpe_ext', 'varchar(64) DEFAULT NULL COMMENT "素材后缀,逗号分隔" after cpe_file_url');
        $this->addColumn('{{%creative}}', 'cpe_size', 'varchar(64) DEFAULT NULL COMMENT "素材大小列表，逗号分隔" after cpe_ext');
        $this->addColumn('{{%creative}}', 'cpe_landing_page', 'varchar(1024) NOT NULL DEFAULT "" COMMENT "目标地址url 逗号分隔" after cpe_size');
        $this->addColumn('{{%creative}}', 'cpe_show_monitor_url', 'text NOT NULL DEFAULT "" COMMENT "曝光监测url 逗号分隔" after cpe_landing_page');
        $this->addColumn('{{%creative}}', 'cpe_click_monitor_url', 'text NOT NULL DEFAULT "" COMMENT "点击监测url 逗号分隔" after cpe_show_monitor_url');
         $this->alterColumn('{{%creative}}', 'form', 'int(1) DEFAULT 0 COMMENT "0 banner, 1 video, 2 mobile, 3 mobile video 4 cpe"');
    }

    public function down()
    {
        return true;
    }
}
