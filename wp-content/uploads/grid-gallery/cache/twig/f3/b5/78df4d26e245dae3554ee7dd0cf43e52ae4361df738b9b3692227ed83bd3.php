<?php

/* @settings/index.twig */
class __TwigTemplate_f3b578df4d26e245dae3554ee7dd0cf43e52ae4361df738b9b3692227ed83bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'beforeSettingsList' => array($this, 'block_beforeSettingsList'),
            'beforeSettings' => array($this, 'block_beforeSettings'),
            'afterSettings' => array($this, 'block_afterSettings'),
            'afterSettingsList' => array($this, 'block_afterSettingsList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context["h"] = $this->env->loadTemplate("@core/helpers.twig");
        // line 6
        echo "
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "settings", 1 => "saveSettings", 2 => array("_wpnonce" => (isset($context["_wpnonce"]) ? $context["_wpnonce"] : null))), "method"), "html", null, true);
        echo "\" method=\"POST\">
        ";
        // line 8
        $this->displayBlock('beforeSettingsList', $context, $blocks);
        // line 14
        echo "        <div class=\"settings-list\">
            ";
        // line 15
        $this->displayBlock('beforeSettings', $context, $blocks);
        // line 16
        echo "            <div class=\"settings\">
                <div class=\"setting\">
                    <div class=\"setting-description\">
                        <label>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Image Editor"), "method"), "html", null, true);
        echo "</label>
                        ";
        // line 20
        echo $context["h"]->getshowTooltip("Image edit library.", "top", true);
        echo "
                    </div>
                    <div class=\"setting-control\">
                        <select name=\"settings[image_editor]\">
                            ";
        // line 24
        $context["editors"] = array("auto" => "Auto", "gd" => "GD", "imagic" => "Imagic");
        // line 29
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editors"]) ? $context["editors"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 30
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
                                ";
            // line 31
            if (((isset($context["name"]) ? $context["name"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image_editor"))) {
                // line 32
                echo "                                    selected=\"selected\" 
                                ";
            }
            // line 34
            echo "                                >";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </select>
                    </div>
                </div>
                <div class=\"setting\">
                    <div class=\"setting-description\">

                        <label>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Roles"), "method"), "html", null, true);
        echo "</label>
                        ";
        // line 44
        echo $context["h"]->getshowTooltip("User roles that can use plugin. Administartor is included by default.", "top", true);
        echo "

                        ";
        // line 46
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
            // line 47
            echo "                            <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('build_pro_url')->getCallable(), array(array("utm_medium" => "manage_roles"))), "html", null, true);
            echo "\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "PRO option"), "method"), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 51
        echo "                    </div>
                    <div class=\"setting-control\">
                        <select multiple=\"multiple\" name=\"settings[access_roles][]\" class=\"chosen-select\" data-placeholder=\"";
        // line 53
        echo "Select avalilable roles to use tables.";
        echo "\">
                            <option value=\"administrator\" disabled selected>Administrator</option>
                            ";
        // line 55
        $context["roles"] = array("editor" => "Editor", "author" => "Author", "contributor" => "Contributor", "subscriber" => "Subscriber");
        // line 61
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["role"] => $context["title"]) {
            // line 62
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : null), "html", null, true);
            echo "\"
                                ";
            // line 63
            if (twig_in_filter((isset($context["role"]) ? $context["role"] : null), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "access_roles"))) {
                // line 64
                echo "                                    selected=\"selected\" 
                                ";
            }
            // line 66
            echo "                                >";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </select>
                    </div>
                </div>
            </div>
            ";
        // line 73
        $this->displayBlock('afterSettings', $context, $blocks);
        // line 74
        echo "        </div>
        ";
        // line 75
        $this->displayBlock('afterSettingsList', $context, $blocks);
        // line 76
        echo "    </form>
";
    }

    // line 8
    public function block_beforeSettingsList($context, array $blocks = array())
    {
        // line 9
        echo "            <button class=\"button\">
                <i class=\"fa fa-fw fa-save\"></i>
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Save"), "method"), "html", null, true);
        echo "
            </button>
        ";
    }

    // line 15
    public function block_beforeSettings($context, array $blocks = array())
    {
    }

    // line 73
    public function block_afterSettings($context, array $blocks = array())
    {
    }

    // line 75
    public function block_afterSettingsList($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@settings/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 75,  202 => 73,  197 => 15,  190 => 11,  186 => 9,  183 => 8,  178 => 76,  176 => 75,  173 => 74,  171 => 73,  165 => 69,  155 => 66,  151 => 64,  149 => 63,  144 => 62,  139 => 61,  137 => 55,  132 => 53,  128 => 51,  122 => 48,  117 => 47,  115 => 46,  110 => 44,  106 => 43,  98 => 37,  88 => 34,  84 => 32,  82 => 31,  77 => 30,  72 => 29,  70 => 24,  63 => 20,  59 => 19,  54 => 16,  52 => 15,  49 => 14,  47 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,);
    }
}
