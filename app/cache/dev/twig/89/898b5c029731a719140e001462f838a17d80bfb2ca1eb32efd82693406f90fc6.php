<?php

/* base.html.twig */
class __TwigTemplate_244b79431c7377949bfee5e1a716a53e1201e364ad0f0be0e855dd987a8682c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
        <!-- <script   src=\"https://code.jquery.com/jquery-1.12.4.js\"   integrity=\"sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=\"   crossorigin=\"anonymous\"></script> -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script   src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body class=\"main-page\">
    <header class=\"main-menu\">
        <div class=\"main-menu__list-box\">
            <ul class=\"main-menu__list\">
                <li class=\"main-menu__item\">MenuItem 1</li>
                <li class=\"main-menu__item\">MenuItem 2</li>
                <li class=\"main-menu__item\">MenuItem 3</li>
                <li class=\"main-menu__item\">MenuItem 4</li>
                <li class=\"main-menu__item\">MenuItem 5</li>
                <li class=\"main-menu__item\">MenuItem 6</li>
                <li class=\"main-menu__item\">MenuItem 7</li>
                <li class=\"main-menu__item\">MenuItem 8</li>
                <li class=\"main-menu__item\">MenuItem 9</li>
                <li class=\"main-menu__item\">MenuItem 10</li>
                <li class=\"main-menu__item\">MenuItem 11</li>
                <li class=\"main-menu__item\">MenuItem 12</li>
            </ul>
            <ul class=\"main-menu__cart-box\">
                <li class=\"main-menu__cart\"><a class=\"main-menu__checkout\" href=\"/cart\">Go to Checkout (<span id=\"itemsnumber\">0</span>)</a></li>
                <button class=\"main-menu__empty-cart\">Empty cart</button>
            </ul>
        </div>
    </header>
    <main class=\"content\">
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "    </main>
    <footer class=\"bottom-bar\"> 
        <p class=\"bottom-bar__copy\">Copyrights</p>
    </footer>

        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 44,  105 => 38,  100 => 6,  94 => 5,  87 => 45,  85 => 44,  78 => 39,  76 => 38,  47 => 12,  40 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/html">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/main.css') }}" />*/
/*         <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">*/
/*         <!-- <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script> -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>*/
/*         <script   src="{{ asset('bundles/app/js/main.js') }}"></script>*/
/*     </head>*/
/*     <body class="main-page">*/
/*     <header class="main-menu">*/
/*         <div class="main-menu__list-box">*/
/*             <ul class="main-menu__list">*/
/*                 <li class="main-menu__item">MenuItem 1</li>*/
/*                 <li class="main-menu__item">MenuItem 2</li>*/
/*                 <li class="main-menu__item">MenuItem 3</li>*/
/*                 <li class="main-menu__item">MenuItem 4</li>*/
/*                 <li class="main-menu__item">MenuItem 5</li>*/
/*                 <li class="main-menu__item">MenuItem 6</li>*/
/*                 <li class="main-menu__item">MenuItem 7</li>*/
/*                 <li class="main-menu__item">MenuItem 8</li>*/
/*                 <li class="main-menu__item">MenuItem 9</li>*/
/*                 <li class="main-menu__item">MenuItem 10</li>*/
/*                 <li class="main-menu__item">MenuItem 11</li>*/
/*                 <li class="main-menu__item">MenuItem 12</li>*/
/*             </ul>*/
/*             <ul class="main-menu__cart-box">*/
/*                 <li class="main-menu__cart"><a class="main-menu__checkout" href="/cart">Go to Checkout (<span id="itemsnumber">0</span>)</a></li>*/
/*                 <button class="main-menu__empty-cart">Empty cart</button>*/
/*             </ul>*/
/*         </div>*/
/*     </header>*/
/*     <main class="content">*/
/*         {% block body %}{% endblock %}*/
/*     </main>*/
/*     <footer class="bottom-bar"> */
/*         <p class="bottom-bar__copy">Copyrights</p>*/
/*     </footer>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
