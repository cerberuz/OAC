<?php

/* edit.html.twig */
class __TwigTemplate_692c149bffe28f866b42c74bbca1bd937f7b2e5c124cd3ba92287e26fd693cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("crud/edit.html.twig");

        $this->blocks = array(
            'formContent' => array($this, 'block_formContent'),
            'dialogs' => array($this, 'block_dialogs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_formContent($context, array $blocks = array())
    {
        // line 3
        echo "    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-geral\" data-toggle=\"tab\">";
        // line 4
        echo gettext("General");
        echo "</a></li>
        <li><a href=\"#tab-acesso\" data-toggle=\"tab\">";
        // line 5
        echo gettext("Acceso");
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-geral\" class=\"tab-pane active\">
            <div class=\"form-group required\">
                <label for=\"login\">";
        // line 10
        echo gettext("Nombre de usuario");
        echo "</label>
                <input id=\"login\" type=\"text\" name=\"login\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "login"), "html", null, true);
        echo "\" onkeyup=\"SGA.Form.loginValue(this)\" maxlength=\"20\" />
            </div>
            <div class=\"form-group required\">
                <label for=\"nome\">";
        // line 14
        echo gettext("Nombre");
        echo "</label>
                <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "nome"), "html", null, true);
        echo "\" maxlength=\"20\" />
            </div>
            <div class=\"form-group required\">
                <label for=\"descricao\">";
        // line 18
        echo gettext("Seudonimo");
        echo "</label>
                <input id=\"descricao\" type=\"text\" name=\"sobrenome\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "sobrenome"), "html", null, true);
        echo "\" maxlength=\"100\" />
            </div>
            ";
        // line 22
        echo "            ";
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 23
            echo "            <div class=\"form-group required\">
                <label for=\"status\">Status</label>
                <select id=\"status\" name=\"status\" class=\"form-control\">
                    <option value=\"\">";
            // line 26
            echo gettext("Seleccione");
            echo "</option>
                    <option value=\"1\" ";
            // line 27
            if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status") == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo gettext("Activo");
            echo "</option>
                    <option value=\"0\" ";
            // line 28
            if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status") == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo gettext("Inactivo");
            echo "</option>
                </select>
            </div>
            ";
            // line 32
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "senha")) > 0)) {
                // line 33
                echo "                <div class=\"form-group\">
                    <button id=\"btn-altera-senha\"
                            class=\"btn btn-default\"
                            onclick=\"return SGA.Usuarios.dialogSenha('";
                // line 36
                echo gettext("Cambiar");
                echo "')\">
                        <span class=\"glyphicon glyphicon-exclamation-sign\"></span> 
                        ";
                // line 38
                echo gettext("Cambiar clave de usuario");
                // line 39
                echo "                    </button>
                </div>
                ";
            }
            // line 42
            echo "            ";
        }
        // line 43
        echo "            ";
        // line 44
        echo "            ";
        if ((!(isset($context["id"]) ? $context["id"] : null))) {
            // line 45
            echo "                <div class=\"form-group required\">
                    <label for=\"senha\">";
            // line 46
            echo gettext("CLave");
            echo "</label>
                    <input id=\"senha\" type=\"password\" name=\"senha\" class=\"form-control\" maxlength=\"40\" />
                </div>
                <div class=\"form-group required\">
                    <label for=\"confirmacao\">";
            // line 50
            echo gettext("Confirmar clave");
            echo "</label>
                    <input id=\"confirmacao\" type=\"password\" name=\"senha2\" class=\"form-control\" maxlength=\"40\" />
                </div>
            ";
        }
        // line 54
        echo "        </div>
        <div id=\"tab-acesso\" class=\"tab-pane\">
            <fieldset>
                <legend>";
        // line 57
        echo gettext("Lotaciones");
        echo "</legend>
                <p class=\"info\">";
        // line 58
        echo gettext("Lotación de grupo o cargo, utilizado para definir el papel o acceso del usuario a las unidades.");
        echo "</p>
                <table id=\"lotacoes\" class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th class=\"check\"><input type=\"checkbox\" onchange=\"SGA.Usuarios.tableCheckAll(this);\" /></th>
                            <th>";
        // line 63
        echo gettext("Grupo");
        echo "</th>
                            <th>";
        // line 64
        echo gettext("Cargo");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lotacoes"]) ? $context["lotacoes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "                        <tr>
                            <td class=\"check\">
                                <input type=\"checkbox\" class=\"check-lotacao\" onchange=\"SGA.Usuarios.multiCheck(this, 'btn-remove-lotacao')\" />
                                <input type=\"hidden\" class=\"value\" name=\"lotacoes[]\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "grupo_id"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "cargo_id"), "html", null, true);
            echo "\" />
                            </td>
                            <td class=\"grupo\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "grupo"), "html", null, true);
            echo "</td>
                            <td class=\"cargo\">
                                <a href=\"javascript:void(0)\" onclick=\"SGA.Usuarios.permissoes('";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "cargo_id"), "html", null, true);
            echo "')\" title=\"";
            echo gettext("Visualizar permisos");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "cargo"), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <button id=\"btn-remove-lotacao\"
                                        class=\"btn btn-danger\"
                                        onclick=\"return SGA.Usuarios.delLotacoes(this)\"
                                        title=\"";
        // line 87
        echo gettext("Remover seleccionados");
        echo "\"
                                        disabled=\"disabled\">
                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                </button>
                            </td>
                            <td colspan=\"2\">
                                <a id=\"btn-add-lotacao\" href=\"#dialog-add-lotacao\" class=\"btn btn-default\" data-toggle=\"modal\">
                                    <span class=\"glyphicon glyphicon-plus\"></span>&nbsp;
                                    ";
        // line 95
        echo gettext("Agregar");
        // line 96
        echo "                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </fieldset>
            <fieldset>
                <legend>";
        // line 103
        echo gettext("Atención");
        echo "</legend>
                <p class=\"info\">";
        // line 104
        echo gettext("Servicios que un usuario (analista) atiende en cada lotación.");
        echo "</p>
                <table id=\"servicos\" class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th class=\"check\"><input type=\"checkbox\" onchange=\"SGA.Usuarios.tableCheckAll(this);\" /></th>
                            <th>";
        // line 109
        echo gettext("Servicio");
        echo "</th>
                            <th>";
        // line 110
        echo gettext("Unidades");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 115
            echo "                        <tr>
                            <td class=\"check\">
                                <input type=\"checkbox\" class=\"check-servico\" onchange=\"SGA.Usuarios.multiCheck(this, 'btn-remove-servico')\" />
                                <input type=\"hidden\" class=\"value\" name=\"servicos[]\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "unidade_id"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "servico_id"), "html", null, true);
            echo "\" />
                            </td>
                            <td class=\"servico\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "servico"), "html", null, true);
            echo "</td>
                            <td class=\"unidade\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "unidade"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <button id=\"btn-remove-servico\"
                                        class=\"btn btn-danger\"
                                        onclick=\"return SGA.Usuarios.delServicos(this)\"
                                        disabled=\"disabled\"
                                        title=\"";
        // line 132
        echo gettext("Remover seleccionados");
        echo "\">
                                    <span class=\"glyphicon glyphicon-minus\"></span> 
                                </button>
                            </td>
                            <td colspan=\"2\">
                                <a id=\"btn-add-servico\" href=\"#dialog-add-servico\" class=\"btn btn-default\" data-toggle=\"modal\">
                                    <span class=\"glyphicon glyphicon-plus\"></span>&nbsp;
                                    ";
        // line 139
        echo gettext("Agregar");
        // line 140
        echo "                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </fieldset>
        </div>
    </div>
";
    }

    // line 151
    public function block_dialogs($context, array $blocks = array())
    {
        // line 152
        echo "    <div id=\"dialog-add-lotacao\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 157
        echo gettext("Lotación");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"add-grupo\">";
        // line 161
        echo gettext("Grupo");
        echo "</label>
                        <select id=\"add-grupo\" class=\"form-control\">
                            <option value=\"\">";
        // line 163
        echo gettext("Seleccione");
        echo "</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"add-cargo\">";
        // line 167
        echo gettext("Cargo");
        echo "</label>
                        <select id=\"add-cargo\" class=\"form-control\">
                            <option value=\"\">";
        // line 169
        echo gettext("Seleccione");
        echo "</option>
                            ";
        // line 170
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cargos"]) ? $context["cargos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 171
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                        </select>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Usuarios.addLotacao()\">";
        // line 177
        echo gettext("Agregar");
        echo "</button>
                </div>
            </div>
        </div>
    </div>

    <div id=\"dialog-add-servico\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 188
        echo gettext("Servicio");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"add-unidade\">";
        // line 192
        echo gettext("Unidades");
        echo "</label>
                        <select id=\"add-unidade\"
                                class=\"form-control\"
                                onchange=\"SGA.Usuarios.servicos_unidade(\$(this).val())\">
                            <option value=\"\">";
        // line 196
        echo gettext("Seleccione");
        echo "</option>
                            ";
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 198
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label>";
        // line 203
        echo gettext("Servicios");
        echo "</label>
                        <div id=\"add-servicos\">
                            <ul></ul>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Usuarios.addServico()\">";
        // line 210
        echo gettext("Agregar");
        echo "</button>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 217
        echo "    <div id=\"dialog-permissoes\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 222
        echo gettext("Permisos");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <h4>";
        // line 225
        echo gettext("Módulos");
        echo "</h4>
                    <ul></ul>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 233
        echo "    ";
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 234
            echo "    <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
            // line 239
            echo gettext("Alterar senha");
            echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <input id=\"senha_id\" type=\"hidden\" value=\"";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" />
                    <div class=\"form-group required\">
                        <label for=\"senha_senha\">";
            // line 244
            echo gettext("Senha");
            echo "</label>
                        <input id=\"senha_senha\" type=\"password\" class=\"form-control\" />
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"senha_confirmacao\">";
            // line 248
            echo gettext("Confirmar senha");
            echo "</label>
                        <input id=\"senha_confirmacao\" type=\"password\" class=\"form-control\" />
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Usuarios.alterarSenha()\">";
            // line 253
            echo gettext("Alterar");
            echo "</button>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 259
        echo "
    <script type=\"text/javascript\">
        \$('#dialog-add-lotacao').on('shown.bs.modal', function() {
            SGA.Usuarios.grupos_disponiveis();
        });
        SGA.Usuarios.labelSenhaAlterada = \"";
        // line 264
        echo gettext("Senha alterada com sucesso");
        echo "\";
        SGA.Usuarios.labelVisualizarPermissoes = \"";
        // line 265
        echo gettext("Visualizar permissões");
        echo "\";
        SGA.Usuarios.multiDeleteLabel = \"";
        // line 266
        echo gettext("Realmente deseja excluir?");
        echo "\";
        SGA.Usuarios.grupos_disponiveis();
    </script>
";
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 266,  540 => 265,  536 => 264,  529 => 259,  520 => 253,  512 => 248,  505 => 244,  500 => 242,  494 => 239,  487 => 234,  484 => 233,  474 => 225,  468 => 222,  461 => 217,  452 => 210,  442 => 203,  437 => 200,  426 => 198,  422 => 197,  418 => 196,  411 => 192,  404 => 188,  390 => 177,  384 => 173,  373 => 171,  369 => 170,  365 => 169,  360 => 167,  353 => 163,  348 => 161,  341 => 157,  334 => 152,  331 => 151,  319 => 140,  317 => 139,  307 => 132,  297 => 124,  288 => 121,  284 => 120,  277 => 118,  272 => 115,  268 => 114,  261 => 110,  257 => 109,  249 => 104,  245 => 103,  236 => 96,  234 => 95,  223 => 87,  214 => 80,  200 => 76,  195 => 74,  188 => 72,  183 => 69,  179 => 68,  172 => 64,  168 => 63,  160 => 58,  156 => 57,  151 => 54,  144 => 50,  137 => 46,  134 => 45,  131 => 44,  129 => 43,  126 => 42,  121 => 39,  119 => 38,  114 => 36,  109 => 33,  106 => 32,  96 => 28,  88 => 27,  84 => 26,  79 => 23,  76 => 22,  71 => 19,  67 => 18,  61 => 15,  57 => 14,  51 => 11,  47 => 10,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
