<?php

/* admin/partial/body_list_club.html.twig */
class __TwigTemplate_7fe8482a044f13276cd0c04afd909c49df227542a8cc0b8d860e36b0ce16c88d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca1781acbbc4d1ec88e4d7d4087b4463a7b656b8b1b34d8e644edd0a352b4b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1781acbbc4d1ec88e4d7d4087b4463a7b656b8b1b34d8e644edd0a352b4b4a->enter($__internal_ca1781acbbc4d1ec88e4d7d4087b4463a7b656b8b1b34d8e644edd0a352b4b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/body_list_club.html.twig"));

        $__internal_3d0fbac93ce64cd469c039181094ba3c6e7eb42279eaee8ece6b93089b644e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0fbac93ce64cd469c039181094ba3c6e7eb42279eaee8ece6b93089b644e06->enter($__internal_3d0fbac93ce64cd469c039181094ba3c6e7eb42279eaee8ece6b93089b644e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/body_list_club.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("admin/partial/top-header.html.twig", "admin/partial/body_list_club.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"main-container ace-save-state\" id=\"main-container\">
    <script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    ";
        // line 9
        $this->loadTemplate("admin/partial/sidebar.html.twig", "admin/partial/body_list_club.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"main-content\">
        <div class=\"main-content-inner\">
            ";
        // line 13
        $this->loadTemplate("admin/partial/breadcrumbs.html.twig", "admin/partial/body_list_club.html.twig", 13)->display($context);
        // line 14
        echo "


            <div class=\"page-content\">
                <div class=\"ace-settings-container\" id=\"ace-settings-container\">
                    <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
                        <i class=\"ace-icon fa fa-cog bigger-130\"></i>
                    </div>

                    <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <div class=\"pull-left\">
                                    <select id=\"skin-colorpicker\" class=\"hide\">
                                        <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                                        <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                                        <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                                        <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-add-container\">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->
                <div class=\"page-header\">
                    <h1>
                        Afficher club Club 2

                    </h1>
                </div><!-- /.page-header -->
                <fieldset>
                    ";
        // line 91
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 92
            echo "
                        <table table width=\"60%\" height=\"20%\" border=\"2\" align=\"center\">
                            <tr>
                                <th>ID club</th>
                                <th>nom club</th>
                                <th>mail club</th>
                                <th>date creation</th>
                                <th>Responsable club</th>
                                <th>description club</th>
                                <th>photo club</th>
                            </tr>

                            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 104, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 105
                echo "
                                <tr>
                                    <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nomC", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "mailC", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "dateCreation", array())), "html", null, true);
                echo "</td>
                                    <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "idUser", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descC", array()), "html", null, true);
                echo "</td>
                                    <td> <img src= \" ";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "image", array()))), "html", null, true);
                echo "\"  width=\"15%\"!imp  height=\"15%\" ></td>
                                    ";
                // line 114
                if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                    // line 118
                    echo "
                                        <td><a href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_supprime", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()))), "html", null, true);
                    echo "\">Supprimer</a></td>
                                        <td><a href=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_club_modifier", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()))), "html", null, true);
                    echo "\">Modifier</a></td>
                                    ";
                }
                // line 122
                echo "
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                        </table>
                    ";
        }
        // line 127
        echo "                </fieldset>


            </div>
        </div>
    </div>


    ";
        // line 135
        $this->loadTemplate("admin/partial/footer.html.twig", "admin/partial/body_list_club.html.twig", 135)->display($context);
        // line 136
        echo "




    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
    </a>
</div><!-- /.main-container -->


";
        
        $__internal_ca1781acbbc4d1ec88e4d7d4087b4463a7b656b8b1b34d8e644edd0a352b4b4a->leave($__internal_ca1781acbbc4d1ec88e4d7d4087b4463a7b656b8b1b34d8e644edd0a352b4b4a_prof);

        
        $__internal_3d0fbac93ce64cd469c039181094ba3c6e7eb42279eaee8ece6b93089b644e06->leave($__internal_3d0fbac93ce64cd469c039181094ba3c6e7eb42279eaee8ece6b93089b644e06_prof);

    }

    public function getTemplateName()
    {
        return "admin/partial/body_list_club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 136,  214 => 135,  204 => 127,  200 => 125,  192 => 122,  187 => 120,  183 => 119,  180 => 118,  178 => 114,  174 => 113,  170 => 112,  166 => 111,  162 => 110,  158 => 109,  154 => 108,  150 => 107,  146 => 105,  142 => 104,  128 => 92,  126 => 91,  47 => 14,  45 => 13,  40 => 10,  38 => 9,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% include \"admin/partial/top-header.html.twig\" %}

<div class=\"main-container ace-save-state\" id=\"main-container\">
    <script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    {% include \"admin/partial/sidebar.html.twig\" %}

    <div class=\"main-content\">
        <div class=\"main-content-inner\">
            {% include \"admin/partial/breadcrumbs.html.twig\" %}



            <div class=\"page-content\">
                <div class=\"ace-settings-container\" id=\"ace-settings-container\">
                    <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
                        <i class=\"ace-icon fa fa-cog bigger-130\"></i>
                    </div>

                    <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <div class=\"pull-left\">
                                    <select id=\"skin-colorpicker\" class=\"hide\">
                                        <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                                        <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                                        <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                                        <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-add-container\">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->
                <div class=\"page-header\">
                    <h1>
                        Afficher club Club 2

                    </h1>
                </div><!-- /.page-header -->
                <fieldset>
                    {% if is_granted('ROLE_RESPONSABLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN')or is_granted('ROLE_RESPONSABLE_CLUB') or is_granted('ROLE_SUPER_ADMIN') %}

                        <table table width=\"60%\" height=\"20%\" border=\"2\" align=\"center\">
                            <tr>
                                <th>ID club</th>
                                <th>nom club</th>
                                <th>mail club</th>
                                <th>date creation</th>
                                <th>Responsable club</th>
                                <th>description club</th>
                                <th>photo club</th>
                            </tr>

                            {% for c in club %}

                                <tr>
                                    <td>{{ c.id }}</td>
                                    <td>{{ c.nomC}}</td>
                                    <td>{{ c.mailC}}</td>
                                    <td>{{ c.dateCreation |date}}</td>
                                    <td>{{ c.idUser}}</td>
                                    <td>{{ c.descC}}</td>
                                    <td> <img src= \" {{ asset ('uploads/images/' ~ c.image) }}\"  width=\"15%\"!imp  height=\"15%\" ></td>
                                    {% if (is_granted('ROLE_RESPONSABLE_SUPER_ADMIN'))
                                    or(is_granted('ROLE_SUPER_ADMIN'))
                                    or(is_granted('ROLE_ADMIN'))
                                    %}

                                        <td><a href=\"{{ path('club_supprime',{'id':c.id}) }}\">Supprimer</a></td>
                                        <td><a href=\"{{ path('_club_modifier',{'id':c.id}) }}\">Modifier</a></td>
                                    {% endif %}

                                </tr>
                            {% endfor %}
                        </table>
                    {% endif %}
                </fieldset>


            </div>
        </div>
    </div>


    {% include \"admin/partial/footer.html.twig\" %}





    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
    </a>
</div><!-- /.main-container -->


", "admin/partial/body_list_club.html.twig", "C:\\wamp64\\www\\pidemo\\app\\Resources\\views\\admin\\partial\\body_list_club.html.twig");
    }
}
