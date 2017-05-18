# LRASTYCMS

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

 LRASTYCMS是基于laravel5.3框架开发的CMS内容管理系统，涵盖无限分类栏目创建，文档创建管理、发布等常见CMS功能及问答评论、友情链接管理、SEO工具、站点电话提交管理和邮件发送、事件广播通知、站内信通知、前后台会员管理、微信公众平台及其他杂项管理功能。文档发布时间支持预选时间发布，文档创建分为普通文档创建及品牌文档创建，

## 安装方式

$git clone https://github.com/HY11053/laravelcms.git

## 数据生成
composer update 安装vendor目录和所需的组件包
安装后执行php artisan mirgate 导入数据表
如需测试数据执行php artisan db:seed
##其他配置项
邮件配置项在.env文件和config/mail.php下，基于事件的驱动发送用户提交过来的数据到指定邮箱,站点配置直接通过.env文件或config/app.php进行配置。
##other
站点目前仅包含后台，前台版本根据界面进行相应的数据提取生成即可、编辑器采用summernote编辑器，问答界面的编辑器采用Ueditor。暂无线上服务器，未做微信公众平台测试，后面根据需求待开发。问答和评论将根据前台功能进行对应后台模块功能实现


