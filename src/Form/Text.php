<?php
namespace kufei\Form;

/**
 * 通用删除管理器
 * Class DeleteHelper
 * @package think\admin\helper
 */
class Text extends Form
{
  /**
   * 表单信息
   * @var array
   */
  protected $data;

  /**
   * 表单值
   * @var string
   */
  protected $value;

  /**
   * 表单传来的外部列表
   * @var array
   */
  protected $categorys;

  /**
   * 逻辑器初始化
   * @param array $data 表单预置信息
   * @param string $value 表单预设值
   * @param array $categorys 表单外部栏目
   * @return boolean|null
   * @throws \think\db\exception\DbException
   */
  protected function build($data, $value, $categorys = []) {
    $data['setup'] = $this->getSetup($data);
		$id = $field 	= 	$info['name'];
		$validate 		= 	self::getvalidate($info['setup']);
		$placeholder 	= 	isset($info['setup']['default']) && $info['setup']['default'] ? trim($info['setup']['default']) : '';
		$remark  		= 	isset($info['setup']['remark']) ? $info['setup']['remark'] : '';
		$readonly 		= 	isset($info['setup']['readonly']) ? 'readonly' : '';
		$disabled 		= 	isset($info['setup']['disabled']) ? 'disabled' : '';
		$title 			=	isset($info['setup']['title']) ? $info['setup']['title'] : '';
		$parseStr   		= 	' <input type="text" name="' . $field . '" placeholder="' . $placeholder . '" value="' . $value . '" class="layui-input" title="' . $title . '"' . $validate . ' '. $readonly . ' ' . $disabled .'><p class="help-block">'. $remark .'</p>';
		return $parseStr;


    /*<div class="layui-form-item">
        <div class="color-green font-w7">网站名称 Website</div>
        <label class="relative block">
            <input readonly value="{:sysconf('site_name')}" class="layui-input layui-bg-gray">
            <a data-copy="{:sysconf('site_name')}" class="fa fa-copy input-right-icon"></a>
        </label>
        <div class="help-block">网站名称及网站图标，将显示在浏览器的标签上</div>
    </div>*/
  }

  /**
   * 表单组件验证器
   * @param array $data 表单预置信息
   * @param string $value 表单预设值
   * @param array $categorys 表单外部栏目
   * @return boolean|null
   * @throws \think\db\exception\DbException
   */
  protected function vali($data, $value, $categorys = []) {
        
  }

}
