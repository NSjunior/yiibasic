<?php
$dataChunks = array_chunk($behave, 10);
$orderNum = 1;
$chunkCount = count($dataChunks);
foreach ($dataChunks as $index => $chunk) {
?>
<div style="font-size:16pt;line-height:26px;">
<div style="float:left;width:45%;padding-left:420px;">
<dl>
<dt style="width:40px;font-weight:bold;padding-top:20px;">แผ่นที่</dt>
    <dd style="width:70px;padding-left:50px;padding-top:20px;">{PAGENO}</dd>
</dl>
</div>
<div style="font-size:18pt;float:right;width:19%;text-align:right;padding-top:-40px;">
<dl>
<dt style="width:50px;font-weight:bold;">เลขที่</dt>
    <dd style="width:140px;"><?php echo empty($profile['order_number']) ? "&nbsp;" : $profile['order_number'] ?></dd>
    <dt style="width:100px;font-weight:bold;padding-left:-20px;">รหัสประจำตัว</dt>
    <dd style="width:110px;"><?php echo empty($profile['code']) ? "&nbsp;" : $profile['code'] ?></dd>
</dl>
</div>
<br/>
<div style="padding-top:20px;">
<dl>
<dt style="width:45px;">คณะสี</dt>
    <dd style="width:80px;"><?php echo empty($missing['teamColor']) ? "&nbsp;" : $missing['teamColor'] ?></dd>
    <p style="font-size:18pt;font-weight:bold;padding-left:300px;padding-top:4px;">บันทึกพฤติกรรมนักเรียน <?php echo $title['name'] ?></p>
</dl>
</div>
<p style="text-align:right;padding-top:-30px;"><?php echo empty($missing['kor']) ? "&nbsp;" : $missing['kor'] ?></p>

<div style="float:left;width:65%;">
<dl>
<dt style="width:65px;">ชื่อนักเรียน</dt>
    <dd style="width:410x;"><?php echo empty($profile['fullname']) ? "&nbsp;" : $profile['fullname'] ?></dd>
    <dt style="width:30px;padding-right:-5px;">ชั้น</dt>
    <dd style="width:147px;"><?php echo empty($profile['classname']) ? "&nbsp;" : $profile['classname'] ?></dd>
    <dt style="width:110px;">อาศัยอยู่บ้านเลขที่</dt>
    <dd style="width:337px;"><?php echo empty($address['no']) ? "&nbsp;" : $address['no'] ?></dd>
    <dt style="width:70px;">ตำบล/แขวง</dt>
    <dd style="width:130px;"><?php echo empty($address['sub_district']) ? "&nbsp;" : $address['sub_district'] ?></dd>
    <dt style="width:65px;">อำเภอ/เขต</dt>
    <dd style="width:176px;"><?php echo empty($address['district']) ? "&nbsp;" : $address['district'] ?></dd>
    <dt style="width:45px;">จังหวัด</dt>
    <dd style="width:176px;"><?php echo empty($address['province']) ? "&nbsp;" : $address['province'] ?></dd>
    <dt style="width:80px;">รหัสไปรษณีย์</dt>
    <dd style="width:92px;"><?php echo empty($address['zip']) ? "&nbsp;" : $address['zip'] ?></dd>
    <dt style="width:55px;">โทรศัพท์</dt>
    <dd style="width:248px;"><?php echo empty($profile['mobile_no']) ? "&nbsp;" : $profile['mobile_no'] ?></dd>
    <dt style="width:45px;">ชื่อบิดา</dt>
    <dd style="width:300px;"><?php echo empty($dad['fullname']) ? "&nbsp;" : $dad['fullname'] ?></dd>
    <dt style="width:55px;">ชื่อมารดา</dt>
    <dd style="width:249px;"><?php echo empty($mom['fullname']) ? "&nbsp;" : $mom['fullname'] ?></dd>
    <dt style="width:75px;">ชื่อผู้ปกครอง</dt>
    <dd style="width:269px;"><?php echo empty($parent['fullname']) ? "&nbsp;" : $parent['fullname'] ?></dd>
</dl>
</div>
<div style="float:left;width:34.5%;border:1px solid;padding-right:3px;">
<dl>
    <?php $newData = []; foreach ($teacherClass as $teacher) {
        $names = explode(',', $teacher['fullname']);
        foreach ($names as $name) {
            $newData[] = [
                'teacherClassSinceYear' => $teacher['teacherClassSinceYear'],
            'fullname' => $name,
        ];
    }
} 
foreach ($newData as $item) {
    echo '<dt style="width:50px;padding-left:5px;padding-top:0px;line-height:28px;">ปี ' . (empty($item['teacherClassSinceYear']) ? "&nbsp;" : $item['teacherClassSinceYear']) . '</dt>' . '<dt style="width:70px;padding-left:-10px;padding-top:0px;line-height:28px;">ครูที่ปรึกษา</dt>'
    . '<dd style="width:225px;padding-top:0px;line-height:28px;">' . (empty($item['fullname']) ? "&nbsp;" : $item['fullname']) . '</dd>'
    ;
}?>
</dl>
</div>
<div style="padding-top:10px;">
<table class="table table-bordered table-sm table-collapse">
    <tr>
      <td style="line-height:20px;text-align:center;font-size:14pt;width:30px;border:1px solid;" rowspan="2">ครั้ง<br/>ที่</th>
        <td style="line-height:20px;text-align:center;font-size:14pt;width:145px;border:1px solid;" rowspan="2">ว.ด.ป.</th>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;" rowspan="2">พฤติกรรมความผิด</th>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;" rowspan="2">การดำเนินการ</th>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;" rowspan="2">ผู้ดำเนินการ</th>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;" colspan="2">คะแนนความประพฤติ(<?php echo $title['behave_init_point'] ?>)</th>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;" rowspan="2">นักเรียน/ผู้ปกครอง<br/>ลงชื่อรับทราบ</th>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;" rowspan="2">หมายเหตุ</th>
    </tr>
    <tr>
      <td style="line-height:20px;text-align:center;font-size:14pt;width:80px;border:1px solid;width:70px;">ตัด:คะแนน</th>
      <td style="line-height:20px;text-align:center;font-size:14pt;width:80px;border:1px solid;width:70px;">เหลือ:คะแนน</th>
    </tr>
    <?php 
    foreach ($chunk as $item): $title['behave_init_point'] += (float) $item['behave_point'] ?>
    <tr>
  </tr>
    <tr>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;"><?php echo $orderNum; ?></td>
        <td style="line-height:20px;text-align:right;font-size:14pt;border:1px solid;">
        <?php
        $dtime = \DateTime::createFromFormat("Y-m-d H:i:s", $item['created_at']);
        $timestamp = $dtime->getTimestamp();
        $thaiYear = date('Y', $timestamp) + 543;
        echo Yii::$app->date->date('j F พ.ศ. ' . $thaiYear , $timestamp);
        ?></td>
        <td style="line-height:20px;font-size:14pt;border:1px solid;"><?php echo $item['title']; ?></td>
        <td style="line-height:20px;font-size:14pt;border:1px solid;"><?php echo $item['type']; ?></td>
        <td style="line-height:20px;font-size:14pt;border:1px solid;"><?php echo $item['informer_name']; ?></td>
        <td style="line-height:20px;text-align:right;font-size:14pt;border:1px solid;"><?php echo number_format($item['behave_point'], 2); ?></td>
        <td style="line-height:20px;text-align:right;font-size:14pt;border:1px solid;"><?php echo number_format($title['behave_init_point'], 2); ?></td>
        <td style="line-height:20px;font-size:14pt;border:1px solid;width:120px;"></td>
        <td style="line-height:20px;text-align:center;font-size:14pt;border:1px solid;width:100px;"></td>
    </tr>
    <?php $orderNum++; endforeach; ?>
</table>
</div>
<?php
}
?>
</div>




