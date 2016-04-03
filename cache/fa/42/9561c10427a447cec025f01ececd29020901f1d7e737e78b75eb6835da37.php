<?php

/* index.html.twig */
class __TwigTemplate_fa429561c10427a447cec025f01ececd29020901f1d7e737e78b75eb6835da37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("module.html.twig");

        $this->blocks = array(
            'moduleContent' => array($this, 'block_moduleContent'),
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
        echo "    <div id=\"dialog-local\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 8
        echo gettext("Ticket");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"local_form\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"), "html", null, true);
        echo "/set_local\" method=\"post\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 15
        echo gettext("Número");
        echo "</label>
                                    <input type=\"text\" id=\"numero_local\" name=\"local\" maxlength=\"3\" class=\"form-control\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["localCookie"]) ? $context["localCookie"] : null), "html", null, true);
        echo "\" />
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\" title=\"";
        // line 21
        echo gettext("Tipo de Atención");
        echo "\">";
        echo gettext("Atención");
        echo "</label>
                                    <select id=\"tipo_atendimento\" name=\"tipo\" class=\"form-control\">
                                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposAtendimento"]) ? $context["tiposAtendimento"] : null));
        foreach ($context['_seq'] as $context["v"] => $context["l"]) {
            // line 24
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
            echo "\" ";
            if (((isset($context["tipoAtendimentoCookie"]) ? $context["tipoAtendimentoCookie"] : null) == (isset($context["v"]) ? $context["v"] : null))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : null), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script type=\"text/javascript\">
                        \$('#local_form').on('submit', function() {
                            var numero = parseInt(\$('#numero_local').val());
                            if (isNaN(numero) || numero <= 0) {
                                \$('#numero_local').val('');
                                return false;
                            }
                            return true;
                        });
                    </script>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#local_form').submit(); return false\">";
        // line 43
        echo gettext("Guardar");
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 49
        echo "    ";
        if (((isset($context["local"]) ? $context["local"] : null) <= 0)) {
            // line 50
            echo "        <script type=\"text/javascript\">
            SGA.dialogs.modal('#dialog-local'); 
            \$('#local').focus();
        </script>
    ";
        } else {
            // line 55
            echo "        ";
            // line 56
            echo "        <div id=\"atendimento\">
            <div class=\"row\">
                <div class=\"left\">
                    <div id=\"local\">
                        <span class=\"label-local\">";
            // line 60
            echo gettext("Ticket");
            echo "</span>
                        <span class=\"numero\">";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["local"]) ? $context["local"] : null), "html", null, true);
            echo "</span>
                        <a href=\"#dialog-local\" data-toggle=\"modal\">";
            // line 62
            echo gettext("Cambiar");
            echo "</a>
                    </div>
                </div>
                <div class=\"right\">
                    <div id=\"controls\">
                        <div id=\"chamar\" class=\"control\" style=\"display:none\">
                            <button class=\"btn btn-default btn-control chamar\" 
                                    onclick=\"SGA.Atendimento.chamar(this)\" 
                                    title=\"";
            // line 70
            echo gettext("Llamar próximo");
            echo "\"
                                    disabled=\"disabled\">
                                <span>";
            // line 72
            echo gettext("Llamar próximo");
            echo "</span>
                            </button>
                        </div>
                        <div id=\"iniciar\" class=\"control\" style=\"display:none\">
                            <div class=\"senha\">
                                <h3 class=\"title\">";
            // line 77
            echo gettext("Atención");
            echo "</h3>
                                <ul class=\"info ";
            // line 78
            if (((isset($context["atendimento"]) ? $context["atendimento"] : null) && $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "isPrioridade"))) {
                echo "prioridade";
            }
            echo "\">
                                    <li class=\"numero\">
                                        <span class=\"atend-label\">";
            // line 80
            echo gettext("Señal | Ticket");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"servico\">
                                        <span class=\"atend-label\">";
            // line 84
            echo gettext("Servicio");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "servicoUnidade"), "nome"), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome-prioridade\">
                                        <span class=\"atend-label\">";
            // line 88
            echo gettext("Prioridad");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "prioridade"), "nome"), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome\">
                                        <span class=\"atend-label\">";
            // line 92
            echo gettext("Nombre");
            echo "</span>
                                        <span class=\"atend-value\">
                                            ";
            // line 94
            if ($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente"), "nome")) {
                // line 95
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente"), "nome"), "html", null, true);
                echo "
                                            ";
            } else {
                // line 97
                echo "                                                -
                                            ";
            }
            // line 99
            echo "                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <button class=\"btn btn-default btn-control chamar_novamente\" 
                                    onclick=\"SGA.Atendimento.chamar_novamente(this)\" 
                                    title=\"";
            // line 105
            echo gettext("Llamar nuevamente");
            echo "\">
                                <span>";
            // line 106
            echo gettext("Llamar nuevamente");
            echo "</span>
                            </button>
                            <button class=\"btn btn-default btn-control iniciar\" 
                                    onclick=\"SGA.Atendimento.iniciar(this)\" 
                                    title=\"";
            // line 110
            echo gettext("Iniciar atención");
            echo "\">
                                <span>";
            // line 111
            echo gettext("Iniciar atención");
            echo "</span>
                            </button>
                            <button class=\"btn btn-default btn-control nao_compareceu\" 
                                    onclick=\"SGA.Atendimento.nao_compareceu(this)\" 
                                    title=\"";
            // line 115
            echo gettext("No se presentó");
            echo "\">
                                <span>";
            // line 116
            echo gettext("No se presentó");
            echo "</span>
                            </button>
                        </div>
                        <div id=\"encerrar\" class=\"control\" style=\"display:none\">
                            <div class=\"senha\">
                                <h3 class=\"title\">";
            // line 121
            echo gettext("Atención");
            echo "</h3>
                                <ul class=\"info ";
            // line 122
            if (((isset($context["atendimento"]) ? $context["atendimento"] : null) && $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "isPrioridade"))) {
                echo "prioridad";
            }
            echo "\">
                                    <li class=\"numero\">
                                        <span class=\"atend-label\">";
            // line 124
            echo gettext("Señal|Ticket");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"servico\">
                                        <span class=\"atend-label\">";
            // line 128
            echo gettext("Servicio");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "servicoUnidade"), "nome"), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome-prioridade\">
                                        <span class=\"atend-label\">";
            // line 132
            echo gettext("Prioridad");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "prioridade"), "nome"), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome\">
                                        <span class=\"atend-label\">";
            // line 136
            echo gettext("Nombre");
            echo "</span>
                                        <span class=\"atend-value\">
                                            ";
            // line 138
            if ($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente"), "nome")) {
                // line 139
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente"), "nome"), "html", null, true);
                echo "
                                            ";
            } else {
                // line 141
                echo "                                                -
                                            ";
            }
            // line 143
            echo "                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <button class=\"btn btn-default btn-control chamar_novamente\" 
                                    onclick=\"SGA.Atendimento.chamar_novamente(this)\" 
                                    title=\"";
            // line 149
            echo gettext("Llamar nuevamente");
            echo "\">
                                <span>";
            // line 150
            echo gettext("Llamar nuevamente");
            echo "</span>
                            </button>
                            <button class=\"btn btn-default btn-control encerrar\" 
                                    onclick=\"SGA.Atendimento.encerrar(this)\" 
                                    title=\"";
            // line 154
            echo gettext("Cerrar atención");
            echo "\">
                                <span>";
            // line 155
            echo gettext("Cerrar atención");
            echo "</span>
                            </button>
                            <button class=\"btn btn-default btn-control erro_triagem\" 
                                    onclick=\"SGA.Atendimento.erro_triagem(this)\" 
                                    title=\"";
            // line 159
            echo gettext("Error de triage");
            echo "\">
                                <span>";
            // line 160
            echo gettext("Error de triage");
            echo "</span>
                            </button>
                        </div>
                        <div id=\"codificar\" class=\"control\" style=\"display:none\">
                            <div>
                                <div class=\"left\">
                                    <h3>";
            // line 166
            echo gettext("Servicios disponibles");
            echo "</h3>
                                    <ul id=\"macro-servicos\" class=\"items\">
                                        ";
            // line 168
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 169
                echo "                                            <li id=\"servico-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
                echo "\">
                                                <a href=\"javascript:void(0)\" 
                                                   onclick=\"SGA.Atendimento.addServico(this)\" 
                                                   data-id=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "id"), "html", null, true);
                echo "\" 
                                                   title=\"";
                // line 173
                echo gettext("Agregar");
                echo "\">
                                                    ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "nome"), "html", null, true);
                echo "
                                                </a>
                                                ";
                // line 176
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "subServicos")) > 0)) {
                    // line 177
                    echo "                                                    <ul>
                                                    ";
                    // line 178
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["su"]) ? $context["su"] : null), "servico"), "subServicos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 179
                        echo "                                                        <li id=\"servico-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub"]) ? $context["sub"] : null), "id"), "html", null, true);
                        echo "\">
                                                            <a href=\"javascript:void(0)\" 
                                                               onclick=\"SGA.Atendimento.addServico(this)\" 
                                                               data-id=\"";
                        // line 182
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub"]) ? $context["sub"] : null), "id"), "html", null, true);
                        echo "\" 
                                                               title=\"";
                        // line 183
                        echo gettext("Agregar");
                        echo "\">
                                                                ";
                        // line 184
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub"]) ? $context["sub"] : null), "nome"), "html", null, true);
                        echo "
                                                            </a>
                                                        </li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "                                                    </ul>
                                                ";
                }
                // line 190
                echo "                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "                                    </ul>
                                </div>
                                <div class=\"left\">
                                    <h3>";
            // line 195
            echo gettext("Servicios realizados");
            echo "</h3>
                                    <ul id=\"servicos-realizados\" class=\"items\">
                                    </ul>
                                    <div class=\"redirecionar\">
                                        <input id=\"encerrar-redirecionar\" type=\"checkbox\" value=\"1\" />
                                        <label for=\"encerrar-redirecionar\" 
                                               title=\"";
            // line 201
            echo gettext("Marque para codificar y redireccionar la atención actual");
            echo "\">
                                            <span>";
            // line 202
            echo gettext("Redireccionar atención al cerrar");
            echo "</span>
                                        </label>
                                    </div>
                                    <button class=\"btn btn-default btn-control codificar\" 
                                            onclick=\"SGA.Atendimento.codificar(this)\" 
                                            title=\"";
            // line 207
            echo gettext("Cerrar atención");
            echo "\">
                                        <span>";
            // line 208
            echo gettext("Cerrar atención");
            echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"fila\">
                <h4>";
            // line 217
            echo gettext("Mi fila");
            echo " <span class=\"tipo-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "tipoAtendimento"), "html", null, true);
            echo "\">(";
            echo twig_escape_filter($this->env, (isset($context["labelTipoAtendimento"]) ? $context["labelTipoAtendimento"] : null), "html", null, true);
            echo ")</span>:</h4>
                <ul></ul>
            </div>
        </div>
        <p class=\"links\">
            <a href=\"#dialog-busca\" class=\"btn btn-default\" data-toggle=\"modal\">
                <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
                ";
            // line 224
            echo gettext("Consultar Clave");
            // line 225
            echo "            </a>
            <button id=\"notification\" type=\"button\" class=\"btn btn-warning\" onclick=\"SGA.Notification.request(this)\" style=\"display: none\">
                <span class=\"glyphicon glyphicon-exclamation-sign\"></span>&nbsp;
                ";
            // line 228
            echo gettext("Habilitar notificación");
            // line 229
            echo "            </button>
        </p>
        
        ";
            // line 233
            echo "        <div id=\"dialog-redirecionar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 238
            echo gettext("Redireccionar");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"redirecionar_servico\">";
            // line 242
            echo gettext("Novo Serviço");
            echo "</label>
                            <select id=\"redirecionar_servico\" class=\"form-control\">
                                <option value=\"\">";
            // line 244
            echo gettext("Seleccione");
            echo "</option>
                                ";
            // line 245
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["servicosIndisponiveis"]) ? $context["servicosIndisponiveis"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["servico"]) {
                // line 246
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["servico"]) ? $context["servico"] : null), "servico"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servico"]) ? $context["servico"] : null), "nome"), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servico'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary btn-redirecionar\" onclick=\"SGA.Atendimento.redirecionar(this); return false;\">
                            ";
            // line 253
            echo gettext("Redireccionar");
            // line 254
            echo "                        </button>
                        <button type=\"button\" class=\"btn btn-primary btn-codificar\" onclick=\"SGA.Atendimento.codificar(this, true); return false;\">
                            ";
            // line 256
            echo gettext("Codificar y redireccionar");
            // line 257
            echo "                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        ";
            // line 264
            echo "        <div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 269
            echo gettext("Busca");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-inline\" role=\"form\" onsubmit=\"return false\">
                            <div class=\"form-group\">
                                <input id=\"numero_busca\" type=\"text\" maxlength=\"5\" class=\"form-search form-control\" placeholder=\"";
            // line 274
            echo gettext("Número");
            echo "\" />
                            </div>
                            <button id=\"btn-consultar\" class=\"btn btn-primary\" onclick=\"SGA.Atendimento.consultar()\">
                                ";
            // line 277
            echo gettext("Consultar");
            // line 278
            echo "                            </button>
                        </form>
                        <div class=\"result\">
                            <table id=\"result_table\" class=\"table\">
                                <thead>
                                    <tr>
                                        <th>";
            // line 284
            echo gettext("Número");
            echo "</th>
                                        <th>";
            // line 285
            echo gettext("Servicio");
            echo "</th>
                                        <th>";
            // line 286
            echo gettext("Fecha Llegada");
            echo "</th>
                                        <th>";
            // line 287
            echo gettext("Fecha inicio");
            echo "</th>
                                        <th>";
            // line 288
            echo gettext("Fecha fin");
            echo "</th>
                                        <th>";
            // line 289
            echo gettext("Triage");
            echo "</th>
                                        <th>";
            // line 290
            echo gettext("Analista");
            echo "</th>
                                        <th>";
            // line 291
            echo gettext("Situación");
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        ";
            // line 304
            echo "        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 309
            echo gettext("Señal | Ticket");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"field\">
                            <h4>";
            // line 313
            echo gettext("Número");
            echo "</h4>
                            <p class=\"numero\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 317
            echo gettext("Servicio");
            echo "</h4>
                            <p class=\"servico\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 321
            echo gettext("Prioridad");
            echo "</h4>
                            <p class=\"nome-prioridade\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 325
            echo gettext("Fecha de Llegada");
            echo "</h4>
                            <p class=\"chegada\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 329
            echo gettext("Tiempo de espera");
            echo "</h4>
                            <p class=\"espera\"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        <div id=\"sga-clock\" title=\"";
            // line 337
            echo gettext("Fecha y hora en servidor");
            echo "\"></div>
        
        ";
            // line 340
            echo "        <audio id=\"alert\" src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "sounds/alert.wav", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"))), "html", null, true);
            echo "\" style=\"display:none\"></audio>
        
        <script type=\"text/javascript\">
            SGA.Clock.init(\"sga-clock\", ";
            // line 343
            echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
            echo ");
            SGA.Atendimento.filaVazia = '";
            // line 344
            echo gettext("Fila vazia");
            echo "';
            SGA.Atendimento.remover = '";
            // line 345
            echo gettext("Remover");
            echo "';
            SGA.Atendimento.marcarErroTriagem = '";
            // line 346
            echo gettext("Realmente desea marcar como error de triage?");
            echo "';
            SGA.Atendimento.marcarNaoCompareceu = '";
            // line 347
            echo gettext("Realmente desea marcar como que no se presentó?");
            echo "';
            SGA.Atendimento.nenhumServicoSelecionado = '";
            // line 348
            echo gettext("Ningún servicio seleccionado");
            echo "';
            SGA.Atendimento.init(";
            // line 349
            if ((isset($context["atendimento"]) ? $context["atendimento"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "status"), "html", null, true);
            } else {
                echo "1";
            }
            echo ");
        </script>
    ";
        }
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
        return array (  737 => 349,  733 => 348,  729 => 347,  725 => 346,  721 => 345,  717 => 344,  713 => 343,  706 => 340,  701 => 337,  690 => 329,  683 => 325,  676 => 321,  669 => 317,  662 => 313,  655 => 309,  648 => 304,  633 => 291,  629 => 290,  625 => 289,  621 => 288,  617 => 287,  613 => 286,  609 => 285,  605 => 284,  597 => 278,  595 => 277,  589 => 274,  581 => 269,  574 => 264,  566 => 257,  564 => 256,  560 => 254,  558 => 253,  551 => 248,  540 => 246,  536 => 245,  532 => 244,  527 => 242,  520 => 238,  513 => 233,  508 => 229,  506 => 228,  501 => 225,  499 => 224,  485 => 217,  473 => 208,  469 => 207,  461 => 202,  457 => 201,  448 => 195,  443 => 192,  436 => 190,  432 => 188,  422 => 184,  418 => 183,  414 => 182,  407 => 179,  403 => 178,  400 => 177,  398 => 176,  393 => 174,  389 => 173,  385 => 172,  378 => 169,  374 => 168,  369 => 166,  360 => 160,  356 => 159,  349 => 155,  345 => 154,  338 => 150,  334 => 149,  326 => 143,  322 => 141,  316 => 139,  314 => 138,  309 => 136,  303 => 133,  299 => 132,  293 => 129,  289 => 128,  283 => 125,  279 => 124,  272 => 122,  268 => 121,  260 => 116,  256 => 115,  249 => 111,  245 => 110,  238 => 106,  234 => 105,  226 => 99,  222 => 97,  216 => 95,  214 => 94,  209 => 92,  203 => 89,  199 => 88,  193 => 85,  189 => 84,  183 => 81,  179 => 80,  172 => 78,  168 => 77,  160 => 72,  155 => 70,  144 => 62,  140 => 61,  136 => 60,  130 => 56,  128 => 55,  121 => 50,  118 => 49,  110 => 43,  91 => 26,  76 => 24,  72 => 23,  65 => 21,  57 => 16,  53 => 15,  44 => 11,  38 => 8,  31 => 3,  28 => 2,);
    }
}
