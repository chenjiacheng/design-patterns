<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Proxy;

/**
 * 主题一代理
 */
class SubjectOneProxy implements Subject
{
    private RealSubject $realSubject;

    public function request()
    {
        if (empty($this->realSubject)) {
            $this->realSubject = new RealSubject();
        }
        $this->preRequest();
        $this->realSubject->request();
        $this->postRequest();
    }

    public function preRequest()
    {
        var_dump('主题一访问真实主题之前的预处理。');
    }

    public function postRequest()
    {
        var_dump('主题一访问真实主题之前的后续处理。');
    }
}