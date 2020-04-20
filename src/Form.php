<?php

declare (strict_types = 1);

namespace kufei;

use think\App;
use think\Container;

/**
 * FORM组件
 * Class Helper
 * @package xaf
 */
abstract class Form 
{

  /** 组件名称 */

  public function __construct(App $app) {
    $this->app = $app;
  }

  /**
   * 创建Response对象
   * @access public
   * @param  mixed  $data 输出数据
   * @param  string $type 输出类型
   * @param  int    $code 状态码
   * @return Response
   */
  public static function create(Form $type): Form {
    $class = '\\kufei\\Form\\' . ucfirst(strtolower($type));
    return Container::getInstance()->invokeClass($class);
  }

  /** 默认的组件生成器 */
  protected function build($data, $value, $category = []): string{
    return '';
  }

  /** 默认的组件验证器 */
  protected function vali($data, $value, $category = []): string{
    return '';
  }

  /** 转换一下 */
  protected function getSetup($data){
    return is_array($data['setup']) ? $data['setup'] : json_decode($data['setup'], true);
  }

  /** 
   * 获取表单中的验证参数
   */
  protected function getVali($data) {
    foreach(['required', 'errormsg', 'pattern'] as $v){
      $validates[] = $data[$v] ?? "{$v}=\"{$data[$v]}\"";
    }
		return implode(' ', $validates);
	}
}