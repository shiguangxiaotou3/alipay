<?php
namespace shiguangxiaotou\alipay\schema;
//require_once 'XMLAttribute.php';
//require_once 'AttributeRule.php';
//require_once 'Option.php';
use shiguangxiaotou\alipay\schema\XMLAttribute;
use shiguangxiaotou\alipay\schema\AttributeRule;
use shiguangxiaotou\alipay\schema\Option;

class ServiceSchemaFactory
{
    public static function createAttribute($id = null, $name = null, $type = null, $valueType = null)
    {
        $attribute = new XMLAttribute();
        $attribute->setId($id);
        $attribute->setName($name);
        $attribute->setType($type);
        $attribute->setValueType($valueType);
        return $attribute;
    }

    public static function createRule($type = null, $name = null, $value = null)
    {
        return new AttributeRule($type, $name, $value);
    }

    public static function createOption($displayName = null, $value = null)
    {
        return new Option($displayName, $value);
    }
}