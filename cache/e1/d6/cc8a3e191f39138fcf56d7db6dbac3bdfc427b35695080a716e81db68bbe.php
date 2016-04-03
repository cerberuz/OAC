<?php

/* index.html.twig */
class __TwigTemplate_e1d6cc8a3e191f39138fcf56d7db6dbac3bdfc427b35695080a716e81db68bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("module.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/bootstrap-switch.min.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"))), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/bootstrap-switch.min.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"))), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-servicos\" data-toggle=\"tab\">";
        // line 12
        echo gettext("Servicios");
        echo "</a></li>
        <li><a href=\"#tab-triagem\" data-toggle=\"tab\">";
        // line 13
        echo gettext("Triage");
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-servicos\" class=\"tab-pane active\">
            <p>";
        // line 17
        echo gettext("Las modificaciones en la inicial y nombre del servicio se guardan automaticamente al salir del campo.");
        echo "</p>
            <table class=\"table\" id=\"servicos\">
                <thead>
                    <tr>
                        <th>";
        // line 21
        echo gettext("Inicial");
        echo "</th>
                        <th>";
        // line 22
        echo gettext("Servicio");
        echo "</th>
                        <th class=\"col-md-2\">";
        // line 23
        echo gettext("Local");
        echo "</th>
                        <th>";
        // line 24
        echo gettext("Status");
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 29
            echo "                    <tr>
                        <td class=\"sigla\">
                            <input id=\"sigla-";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\" 
                                   type=\"text\" 
                                   class=\"servico-";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo " center form-control\" 
                                   value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["su"]) ? $context["su"] : null), "sigla"), "html", null, true);
            echo "\" 
                                   data-id=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\" 
                                   onclick=\"this.select()\" 
                                   onkeyup=\"this.value = this.value.toUpperCase()\" 
                                   onblur=\"SGA.Unidade.Servicos.change(";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo ")\"
                                   size=\"1\"
                                   maxlength=\"1\" 
                                   ";
            // line 41
            if (($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "status") != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo " />
                        </td>
                        <td class=\"nome\">
                            <div class=\"input-group\">
                                <input id=\"nome-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\" 
                                       type=\"text\" 
                                       class=\"servico-";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo " center form-control\" 
                                       value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["su"]) ? $context["su"] : null), "nome"), "html", null, true);
            echo "\" 
                                       data-id=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\" 
                                       onchange=\"SGA.Unidade.Servicos.change(";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo ")\"
                                       maxlength=\"50\" 
                                       ";
            // line 52
            if (($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "status") != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo " />
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default servico-";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\"
                                            onclick=\"SGA.Unidade.Servicos.reverteNome(";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo ")\"
                                            title=\"Reverter nome para nome original\"
                                            ";
            // line 57
            if (($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "status") != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                        <span class=\"glyphicon glyphicon-refresh\"></span>
                                    </button>
                                </span>
                            </div>
                        </td>
                        <td class=\"local\">
                            <select id=\"local-";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\" 
                                    class=\"servico-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo " form-control\" 
                                    onchange=\"SGA.Unidade.Servicos.change(";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo ")\" 
                                    ";
            // line 67
            if (($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "status") != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locais"]) ? $context["locais"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 69
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : null), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "local"), "id") == $this->getAttribute((isset($context["local"]) ? $context["local"] : null), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : null), "nome"), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                            </select>
                        </td>
                        <td style=\"width: 1%; white-space: nowrap\">
                            <input 
                                id=\"btn-enable-";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\"
                                type=\"checkbox\" 
                                data-on-color=\"success\" 
                                data-off-color=\"default\"
                                data-on-text=\"On\"
                                data-off-text=\"Off\"
                                data-id=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
            echo "\"
                                ";
            // line 82
            if (($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "status") == 1)) {
                echo "checked";
            }
            echo ">
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </tbody>
            </table>
        </div>
        <div id=\"tab-triagem\" class=\"tab-pane\">
            <form id=\"form-triagem\" role=\"form\" onsubmit=\"return false\">
                <fieldset>
                    <legend>";
        // line 92
        echo gettext("Impresión");
        echo "</legend>
                    <div class=\"checkbox\">
                        <label for=\"impressao\">
                            <input id=\"impressao\" name=\"impressao\" type=\"checkbox\" value=\"1\" ";
        // line 95
        if ($this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "statusImpressao")) {
            echo "checked=\"checked\"";
        }
        // line 96
        echo "                                   onclick=\"setTimeout(SGA.Unidade.Triagem.salvar, 100)\" />
                            ";
        // line 97
        echo gettext("Activar impresión de código");
        // line 98
        echo "                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"mensagem\" class=\"form-label\">";
        // line 101
        echo gettext("Mensage");
        echo "</label>
                        <input type=\"text\" id=\"mensagem\" name=\"mensagem\" class=\"form-control\" maxlength=\"100\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "mensagemImpressao"), "html", null, true);
        echo "\"
                               onchange=\"SGA.Unidade.Triagem.salvar()\" />
                    </div>
                    <div class=\"form-group\">
                        <label>";
        // line 106
        echo gettext("Reiniciar códigos");
        echo "</label>
                        <button class=\"btn btn-danger\" onclick=\"return SGA.Unidade.Triagem.reiniciarSenhas('";
        // line 107
        echo gettext("Deseja realmente reiniciar as senhas?");
        echo "')\">
                            ";
        // line 108
        echo gettext("Reiniciar");
        // line 109
        echo "                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
        // line 118
        echo "<div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 123
        echo gettext("Configuración");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 126
        echo gettext("Iniciales reiniciadas con exito");
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 129
        echo gettext("Guardar");
        echo "</button>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 129,  323 => 126,  317 => 123,  310 => 118,  300 => 109,  298 => 108,  294 => 107,  290 => 106,  283 => 102,  279 => 101,  274 => 98,  272 => 97,  269 => 96,  265 => 95,  259 => 92,  251 => 86,  239 => 82,  235 => 81,  226 => 75,  220 => 71,  205 => 69,  201 => 68,  195 => 67,  191 => 66,  187 => 65,  183 => 64,  171 => 57,  166 => 55,  162 => 54,  155 => 52,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  133 => 45,  124 => 41,  118 => 38,  112 => 35,  108 => 34,  104 => 33,  99 => 31,  95 => 29,  91 => 28,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  65 => 17,  58 => 13,  54 => 12,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
