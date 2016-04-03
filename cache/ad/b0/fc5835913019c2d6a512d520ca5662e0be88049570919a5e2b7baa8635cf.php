<?php

/* module.html.twig */
class __TwigTemplate_adb0fc5835913019c2d6a512d520ca5662e0be88049570919a5e2b7baa8635cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'moduleContent' => array($this, 'block_moduleContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        // line 4
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/style.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"))), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/script.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"))), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"> SGA.module = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"), "html", null, true);
        echo "\";</script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"module-content\">
    <div class=\"header\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"))), "html", null, true);
        echo "\"/>
        <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "nome"), "html", null, true);
        echo "</h2>
        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "descricao"), "html", null, true);
        echo "</p>
    </div>
    ";
        // line 16
        $this->displayBlock('moduleContent', $context, $blocks);
        // line 18
        echo "</div>
";
    }

    // line 16
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    public function getTemplateName()
    {
        return "module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  72 => 18,  65 => 14,  61 => 13,  57 => 12,  53 => 10,  50 => 9,  40 => 5,  33 => 3,  30 => 2,  554 => 343,  535 => 327,  525 => 319,  516 => 312,  510 => 309,  504 => 306,  497 => 301,  481 => 286,  479 => 285,  462 => 270,  460 => 269,  443 => 254,  441 => 253,  423 => 237,  421 => 236,  412 => 229,  410 => 228,  402 => 223,  391 => 214,  389 => 213,  365 => 192,  277 => 106,  275 => 105,  271 => 104,  266 => 102,  261 => 99,  246 => 97,  242 => 96,  237 => 94,  229 => 88,  227 => 87,  218 => 81,  214 => 80,  208 => 77,  204 => 76,  198 => 73,  194 => 72,  187 => 68,  183 => 67,  176 => 63,  172 => 62,  165 => 58,  161 => 57,  155 => 54,  151 => 53,  144 => 51,  134 => 48,  126 => 47,  121 => 45,  116 => 42,  114 => 41,  108 => 38,  102 => 34,  94 => 31,  88 => 29,  84 => 27,  82 => 26,  77 => 16,  74 => 23,  70 => 16,  63 => 18,  59 => 17,  52 => 13,  44 => 6,  39 => 6,  35 => 4,  31 => 3,  28 => 2,);
    }
}
