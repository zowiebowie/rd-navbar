<h3>
    Принципы работы со скриптом
</h3>

<p>
    HTML Разметка для создания навигации может быть совершенно любой. Все зависит исключительно от дизайна
    шаблона и фантазии кодера. Тем не менее, все элементы навигации должны располагаться внутри блока с классом .rd-navbar
</p>

<code>
<pre>
&lt;!-- RD Navbar --&gt;
&lt;nav class="rd-navbar"&gt;
    ...
&lt;/nav&gt;
&lt;!-- END RD Navbar--&gt;
</pre>
</code>

<p>
    Принцип работы с навбаром основан на использовании различных лейаутов. В демо, для примера, показано, как одна и также
    разметка выглядит в мобильном (.rd-navbar-fixed) и десктопном (.rd-navbar-static) лейаутах. Сами названия лейаутов также
    могут быть совершенно любыми, на усмотрение разработчика.
</p>

<p>
    В общем виде, реализация любой навигации в шаблоне с использованием RD Navbar сводится к использованию следующих функциональных
    единиц скрипта:
</p>

<ul class="marked-list">
    <li>
        Настройка лейаутов навбара для соответствующих разрешений
    </li>
    <li>
        Настройка прилипающей панели
    </li>
    <li>
        Настройка навигации: выпадающие и мега- меню.
    </li>
    <li>
        Настройка переключатей (тоглов)
    </li>
    <li>
        Настройка линковщика
    </li>
    <li>
        Настройка одностраничной навигации
    </li>
</ul>