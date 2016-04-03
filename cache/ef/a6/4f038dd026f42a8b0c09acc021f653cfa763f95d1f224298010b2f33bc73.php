<?php

/* crud/edit.html.twig */
class __TwigTemplate_efa64f038dd026f42a8b0c09acc021f653cfa763f95d1f224298010b2f33bc73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("module.html.twig");

        $this->blocks = array(
            'moduleContent' => array($this, 'block_moduleContent'),
            'formContent' => array($this, 'block_formContent'),
            'dialogs' => array($this, 'block_dialogs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 3
        echo "    <form id=\"crud-form\" method=\"post\" action=\"#\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id"), "html", null, true);
        echo "\" />
        
        ";
        // line 6
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array")) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 11
        echo "        
        ";
        // line 12
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array")) {
            // line 13
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 17
        echo "        
        ";
        // line 18
        $this->displayBlock('formContent', $context, $blocks);
        // line 20
        echo "        <div class=\"buttons\">
            <span class=\"btns\">
                <button type=\"submit\"
                        class=\"btn btn-primary\">
                    <span class=\"glyphicon glyphicon-save\"></span>&nbsp;
                    ";
        // line 25
        echo gettext("Salvar");
        // line 26
        echo "                </button>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"), "html", null, true);
        echo "\"
                        class=\"btn btn-default\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>&nbsp;
                    ";
        // line 30
        echo gettext("Voltar");
        // line 31
        echo "                </a>
            </span>
            <p class=\"required-desc\">";
        // line 33
        echo gettext("Campos obrigatórios");
        echo "</p>
            ";
        // line 34
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id") > 0)) {
            // line 35
            echo "            <button id=\"btn-delete\"
                    class=\"btn btn-danger\"
                    onclick=\"SGA.Form.confirm('";
            // line 37
            echo gettext("Realmente deseja excluir?");
            echo "', function() { \$('#form-delete').submit() }); return false;\">
                <span class=\"glyphicon glyphicon-remove\"></span>&nbsp;
                ";
            // line 39
            echo gettext("Excluir");
            // line 40
            echo "            </button>
            ";
        }
        // line 42
        echo "        </div>
    </form>
    ";
        // line 44
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id") > 0)) {
            // line 45
            echo "    <form id=\"form-delete\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id"), "html", null, true);
            echo "\" method=\"post\">
    </form>
    ";
        }
        // line 48
        echo "    ";
        $this->displayBlock('dialogs', $context, $blocks);
        // line 50
        echo "    <script type=\"text/javascript\">
        SGA.Form.labels.required = '";
        // line 51
        echo gettext("Campo obrigatório");
        echo "';
        SGA.Form.validate('crud-form');
    </script>
    
";
    }

    // line 18
    public function block_formContent($context, array $blocks = array())
    {
        // line 19
        echo "        ";
    }

    // line 48
    public function block_dialogs($context, array $blocks = array())
    {
        // line 49
        echo "    ";
    }

    public function getTemplateName()
    {
        return "crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  153 => 19,  150 => 18,  141 => 51,  138 => 50,  135 => 48,  124 => 45,  122 => 44,  118 => 42,  112 => 39,  107 => 37,  103 => 35,  101 => 34,  97 => 33,  93 => 31,  91 => 30,  83 => 27,  80 => 26,  78 => 25,  69 => 18,  66 => 17,  60 => 14,  55 => 12,  52 => 11,  46 => 8,  43 => 7,  41 => 6,  36 => 4,  33 => 3,  30 => 2,  544 => 266,  540 => 265,  536 => 264,  529 => 259,  520 => 253,  512 => 248,  505 => 244,  500 => 242,  494 => 239,  487 => 234,  484 => 233,  474 => 225,  468 => 222,  461 => 217,  452 => 210,  442 => 203,  437 => 200,  426 => 198,  422 => 197,  418 => 196,  411 => 192,  404 => 188,  390 => 177,  384 => 173,  373 => 171,  369 => 170,  365 => 169,  360 => 167,  353 => 163,  348 => 161,  341 => 157,  334 => 152,  331 => 151,  319 => 140,  317 => 139,  307 => 132,  297 => 124,  288 => 121,  284 => 120,  277 => 118,  272 => 115,  268 => 114,  261 => 110,  257 => 109,  249 => 104,  245 => 103,  236 => 96,  234 => 95,  223 => 87,  214 => 80,  200 => 76,  195 => 74,  188 => 72,  183 => 69,  179 => 68,  172 => 64,  168 => 63,  160 => 49,  156 => 57,  151 => 54,  144 => 50,  137 => 46,  134 => 45,  131 => 44,  129 => 43,  126 => 42,  121 => 39,  119 => 38,  114 => 40,  109 => 33,  106 => 32,  96 => 28,  88 => 27,  84 => 26,  79 => 23,  76 => 22,  71 => 20,  67 => 18,  61 => 15,  57 => 13,  51 => 11,  47 => 10,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
