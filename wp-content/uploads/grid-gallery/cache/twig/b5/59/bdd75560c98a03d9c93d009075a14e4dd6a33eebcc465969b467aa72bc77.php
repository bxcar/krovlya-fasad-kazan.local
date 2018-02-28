<?php

/* @core/form.twig */
class __TwigTemplate_b559bdd75560c98a03d9c93d009075a14e4dd6a33eebcc465969b467aa72bc77 extends Twig_Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 20
        echo "
";
        // line 51
        echo "
";
        // line 74
        echo "
";
        // line 86
        echo "
";
        // line 92
        echo "
";
        // line 98
        echo "
";
        // line 108
        echo "
";
        // line 114
        echo "
";
        // line 120
        echo "
";
        // line 126
        echo "
";
        // line 132
        echo "
";
        // line 138
        echo "
";
        // line 148
        echo "
";
        // line 156
        echo "
";
        // line 164
        echo "
";
        // line 170
        echo "
";
        // line 174
        echo "
";
    }

    // line 1
    public function getopen($_method = null, $_action = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $_method,
            "action" => $_action,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null)), "html", null, true);
            echo "\" ";
            if ((!twig_test_empty((isset($context["action"]) ? $context["action"] : null)))) {
                echo "action=\"";
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
                echo "\"";
            }
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            $context["title"] = $this->getAttribute((isset($context["tooltips"]) ? $context["tooltips"] : null), (isset($context["id"]) ? $context["id"] : null), array(), "array");
            // line 13
            echo "
    ";
            // line 14
            if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
                // line 15
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon"), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "\"
           style=\"";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "style"));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    echo twig_escape_filter($this->env, trim((isset($context["property"]) ? $context["property"] : null)), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, trim((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrow($_label = null, $_element = null, $_id = null, $_titleRow = null, $_row_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "element" => $_element,
            "id" => $_id,
            "titleRow" => $_titleRow,
            "row_id" => $_row_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["form"] = $this;
            // line 23
            echo "    
    ";
            // line 24
            if ((!twig_test_empty((isset($context["row_id"]) ? $context["row_id"] : null)))) {
                // line 25
                echo "    <tr id=\"";
                echo twig_escape_filter($this->env, (isset($context["row_id"]) ? $context["row_id"] : null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 27
                echo "    <tr>
    ";
            }
            // line 29
            echo "        <th scope=\"row\">
            ";
            // line 30
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 31
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 33
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 36
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 38
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 41
            echo "        </th>
        ";
            // line 42
            if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                // line 43
                echo "        <td id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
        ";
            } else {
                // line 45
                echo "        <td>
        ";
            }
            // line 47
            echo "            ";
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getrowpro($_label = null, $_link = null, $_id = null, $_element = null, $_titleRow = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "link" => $_link,
            "id" => $_id,
            "element" => $_element,
            "titleRow" => $_titleRow,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["form"] = $this;
            // line 54
            echo "    
    <tr>
        <th scope=\"row\">
            ";
            // line 57
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 58
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 60
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 63
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 65
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 68
            echo "            <br>
            <label><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array((isset($context["link"]) ? $context["link"] : null))), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
        </th>
        <td>";
            // line 71
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function getinput($_type = "text", $_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
    ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 78
                echo "        ";
                if (twig_test_iterable((isset($context["val"]) ? $context["val"] : null))) {
                    // line 79
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["val"]) ? $context["val"] : null));
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : null), "html", null, true);
                        echo ":";
                        echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : null), "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
        ";
                } else {
                    // line 81
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                    echo "\"
        ";
                }
                // line 83
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function gettext($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            $context["form"] = $this;
            // line 89
            echo "
    ";
            // line 90
            echo $context["form"]->getinput("text", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getpassword($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    ";
            $context["form"] = $this;
            // line 95
            echo "
    ";
            // line 96
            echo $context["form"]->getinput("password", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getbutton($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["form"] = $this;
            // line 101
            echo "
    ";
            // line 102
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 103
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 104
                echo "    ";
            }
            // line 105
            echo "
    ";
            // line 106
            echo $context["form"]->getinput("button", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getcheckbox($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            $context["form"] = $this;
            // line 111
            echo "
    ";
            // line 112
            echo $context["form"]->getinput("checkbox", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 115
    public function getfile($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            echo "    ";
            $context["form"] = $this;
            // line 117
            echo "
    ";
            // line 118
            echo $context["form"]->getinput("file", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function gethidden($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["form"] = $this;
            // line 123
            echo "
    ";
            // line 124
            echo $context["form"]->getinput("hidden", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getradio($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "    ";
            $context["form"] = $this;
            // line 129
            echo "
    ";
            // line 130
            echo $context["form"]->getinput("radio", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getcolor($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["form"] = $this;
            // line 135
            echo "
    ";
            // line 136
            echo $context["form"]->getinput("color", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function getsubmit($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 140
            echo "    ";
            $context["form"] = $this;
            // line 141
            echo "
    ";
            // line 142
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 143
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 144
                echo "    ";
            }
            // line 145
            echo "
    ";
            // line 146
            echo $context["form"]->getinput("submit", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getselect($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 152
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function getselectv($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 158
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 160
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["text"]) ? $context["text"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getspan($_name = null, $_text = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "text" => $_text,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    <span name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 167
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
            echo "
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function getselected($_actual = null, $_expected = null)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $_actual,
            "expected" => $_expected,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    ";
            if (((isset($context["actual"]) ? $context["actual"] : null) == (isset($context["expected"]) ? $context["expected"] : null))) {
                echo "selected=\"selected\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getlabel($_label = null, $_for = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "for" => $_for,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  977 => 176,  951 => 172,  939 => 171,  925 => 167,  895 => 165,  883 => 162,  862 => 159,  831 => 157,  819 => 154,  802 => 152,  798 => 151,  781 => 150,  754 => 146,  751 => 145,  743 => 142,  740 => 141,  724 => 139,  711 => 136,  708 => 135,  705 => 134,  692 => 133,  679 => 130,  676 => 129,  673 => 128,  660 => 127,  647 => 124,  644 => 123,  628 => 121,  615 => 118,  612 => 117,  609 => 116,  596 => 115,  583 => 112,  580 => 111,  577 => 110,  551 => 106,  548 => 105,  545 => 104,  542 => 103,  540 => 102,  537 => 101,  534 => 100,  521 => 99,  505 => 95,  502 => 94,  476 => 90,  473 => 89,  470 => 88,  445 => 84,  439 => 83,  410 => 78,  397 => 76,  364 => 69,  361 => 68,  351 => 64,  340 => 63,  334 => 60,  330 => 59,  327 => 58,  325 => 57,  320 => 54,  317 => 53,  302 => 52,  286 => 47,  274 => 42,  271 => 41,  261 => 37,  250 => 36,  244 => 33,  237 => 31,  235 => 30,  232 => 29,  228 => 27,  222 => 25,  217 => 23,  214 => 22,  199 => 21,  175 => 17,  171 => 16,  166 => 15,  164 => 14,  161 => 13,  158 => 12,  156 => 11,  145 => 10,  124 => 6,  91 => 2,  70 => 170,  67 => 164,  64 => 156,  49 => 120,  43 => 108,  40 => 98,  37 => 92,  34 => 86,  31 => 74,  28 => 51,  25 => 20,  22 => 9,  19 => 5,  78 => 1,  75 => 17,  72 => 16,  69 => 15,  63 => 13,  61 => 148,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  33 => 2,  46 => 114,  21 => 1,  2437 => 4,  2425 => 3,  2417 => 1780,  2413 => 1779,  2407 => 1776,  2403 => 1775,  2397 => 1772,  2393 => 1771,  2387 => 1768,  2383 => 1767,  2378 => 1764,  2367 => 1761,  2358 => 1760,  2353 => 1759,  2351 => 1742,  2346 => 1740,  2343 => 1739,  2339 => 1594,  2329 => 1590,  2320 => 1584,  2316 => 1583,  2311 => 1581,  2302 => 1575,  2298 => 1574,  2293 => 1573,  2288 => 1572,  2285 => 1571,  2281 => 1435,  2278 => 1434,  2269 => 1428,  2265 => 1427,  2259 => 1424,  2253 => 1421,  2249 => 1419,  2246 => 1418,  2237 => 1410,  2233 => 1409,  2226 => 1405,  2220 => 1402,  2217 => 1401,  2214 => 1400,  2209 => 1415,  2207 => 1400,  2201 => 1397,  2197 => 1396,  2190 => 1392,  2184 => 1389,  2180 => 1387,  2177 => 1386,  2166 => 1377,  2162 => 1376,  2158 => 1375,  2154 => 1374,  2150 => 1373,  2143 => 1372,  2139 => 1371,  2135 => 1370,  2131 => 1369,  2127 => 1368,  2123 => 1367,  2115 => 1362,  2106 => 1356,  2099 => 1352,  2088 => 1344,  2084 => 1343,  2079 => 1341,  2075 => 1340,  2067 => 1335,  2058 => 1329,  2051 => 1325,  2042 => 1319,  2035 => 1315,  2026 => 1309,  2019 => 1305,  2010 => 1299,  2003 => 1295,  1994 => 1289,  1987 => 1285,  1978 => 1279,  1971 => 1275,  1965 => 1271,  1963 => 1268,  1958 => 1265,  1955 => 1261,  1953 => 1260,  1949 => 1258,  1946 => 1257,  1937 => 998,  1933 => 997,  1925 => 992,  1919 => 989,  1915 => 987,  1912 => 986,  1907 => 982,  1899 => 977,  1895 => 976,  1888 => 972,  1883 => 970,  1877 => 966,  1867 => 956,  1861 => 953,  1854 => 949,  1849 => 947,  1843 => 943,  1841 => 942,  1837 => 940,  1834 => 936,  1832 => 935,  1828 => 933,  1825 => 932,  1819 => 924,  1816 => 911,  1812 => 908,  1809 => 899,  1805 => 896,  1802 => 881,  1800 => 880,  1797 => 879,  1790 => 747,  1788 => 743,  1781 => 739,  1776 => 737,  1771 => 734,  1768 => 733,  1761 => 727,  1759 => 717,  1752 => 713,  1747 => 711,  1742 => 708,  1739 => 707,  1732 => 927,  1729 => 879,  1725 => 876,  1722 => 868,  1717 => 864,  1714 => 848,  1710 => 845,  1707 => 837,  1703 => 834,  1700 => 825,  1696 => 822,  1693 => 814,  1689 => 811,  1686 => 803,  1682 => 800,  1679 => 781,  1675 => 778,  1672 => 771,  1668 => 768,  1666 => 762,  1662 => 760,  1659 => 753,  1656 => 751,  1653 => 733,  1650 => 731,  1647 => 707,  1643 => 704,  1640 => 692,  1636 => 689,  1633 => 682,  1629 => 679,  1626 => 664,  1621 => 660,  1618 => 641,  1615 => 640,  1611 => 637,  1608 => 636,  1600 => 630,  1598 => 629,  1594 => 627,  1592 => 626,  1588 => 624,  1586 => 623,  1582 => 621,  1580 => 620,  1576 => 618,  1574 => 617,  1565 => 611,  1559 => 610,  1554 => 608,  1548 => 607,  1543 => 605,  1537 => 604,  1530 => 600,  1526 => 599,  1516 => 592,  1509 => 588,  1499 => 581,  1493 => 580,  1489 => 579,  1483 => 578,  1476 => 574,  1469 => 569,  1466 => 568,  1458 => 562,  1456 => 560,  1452 => 558,  1450 => 557,  1446 => 555,  1444 => 553,  1441 => 552,  1438 => 536,  1436 => 525,  1432 => 523,  1429 => 522,  1425 => 492,  1422 => 491,  1415 => 493,  1413 => 491,  1409 => 489,  1407 => 473,  1403 => 471,  1401 => 470,  1396 => 467,  1393 => 463,  1391 => 462,  1387 => 460,  1384 => 459,  1377 => 454,  1369 => 449,  1365 => 448,  1361 => 447,  1356 => 445,  1352 => 443,  1349 => 442,  1342 => 438,  1338 => 437,  1332 => 434,  1328 => 432,  1323 => 429,  1321 => 420,  1317 => 418,  1315 => 409,  1311 => 407,  1309 => 397,  1305 => 395,  1302 => 394,  1300 => 393,  1296 => 391,  1294 => 390,  1290 => 388,  1288 => 379,  1284 => 377,  1282 => 368,  1278 => 366,  1276 => 356,  1272 => 354,  1269 => 353,  1267 => 352,  1263 => 350,  1261 => 349,  1257 => 347,  1255 => 338,  1251 => 336,  1249 => 335,  1245 => 333,  1243 => 328,  1239 => 326,  1236 => 325,  1234 => 324,  1229 => 321,  1227 => 317,  1223 => 315,  1220 => 314,  1216 => 308,  1213 => 307,  1208 => 303,  1205 => 298,  1202 => 297,  1195 => 309,  1193 => 307,  1189 => 305,  1187 => 297,  1183 => 295,  1181 => 294,  1177 => 292,  1174 => 285,  1171 => 273,  1167 => 270,  1165 => 268,  1161 => 266,  1159 => 264,  1154 => 261,  1152 => 259,  1149 => 258,  1145 => 251,  1143 => 250,  1139 => 248,  1136 => 241,  1132 => 238,  1130 => 236,  1126 => 234,  1124 => 232,  1119 => 229,  1117 => 228,  1113 => 226,  1111 => 224,  1108 => 223,  1104 => 219,  1102 => 210,  1095 => 206,  1086 => 200,  1082 => 199,  1075 => 194,  1073 => 193,  1069 => 191,  1066 => 190,  1062 => 1739,  1052 => 1732,  1047 => 1730,  1041 => 1727,  1037 => 1726,  1033 => 1725,  1027 => 1722,  1022 => 1721,  1020 => 1720,  1013 => 1716,  1006 => 1712,  981 => 1689,  971 => 1685,  965 => 175,  955 => 1681,  945 => 1680,  942 => 1679,  938 => 1678,  934 => 1676,  932 => 1604,  926 => 1601,  921 => 1599,  915 => 1595,  913 => 1571,  908 => 166,  905 => 1568,  899 => 1567,  892 => 1563,  881 => 1558,  875 => 1555,  871 => 1554,  866 => 160,  859 => 1549,  850 => 1543,  845 => 158,  840 => 1539,  825 => 1528,  818 => 1524,  812 => 1521,  800 => 1513,  797 => 1512,  793 => 1511,  788 => 1509,  782 => 1505,  772 => 1501,  767 => 149,  761 => 1498,  755 => 1497,  752 => 1496,  748 => 144,  745 => 143,  742 => 1493,  739 => 1492,  737 => 140,  734 => 1490,  732 => 1481,  726 => 1478,  721 => 1476,  713 => 1471,  706 => 1467,  696 => 1460,  691 => 1458,  685 => 1455,  680 => 1453,  675 => 1451,  668 => 1447,  664 => 1446,  657 => 1442,  651 => 1439,  646 => 1437,  643 => 1436,  641 => 122,  638 => 1433,  636 => 1418,  633 => 1417,  631 => 1386,  627 => 1384,  625 => 1257,  617 => 1251,  614 => 1244,  610 => 1241,  607 => 1234,  603 => 1231,  600 => 1223,  595 => 1219,  592 => 1211,  588 => 1208,  585 => 1200,  581 => 1197,  578 => 1189,  574 => 1186,  571 => 1172,  567 => 1169,  564 => 109,  560 => 1158,  557 => 1151,  553 => 1148,  550 => 1141,  546 => 1138,  543 => 1130,  539 => 1127,  536 => 1119,  532 => 1116,  529 => 1108,  525 => 1105,  522 => 1097,  518 => 1094,  515 => 1086,  511 => 1083,  508 => 96,  504 => 1068,  501 => 1048,  498 => 1046,  495 => 1045,  492 => 1044,  489 => 93,  486 => 1008,  480 => 1003,  478 => 986,  474 => 984,  472 => 932,  469 => 931,  467 => 636,  464 => 635,  462 => 568,  459 => 567,  457 => 87,  449 => 516,  447 => 515,  435 => 506,  431 => 81,  423 => 502,  418 => 500,  413 => 79,  411 => 459,  408 => 458,  406 => 77,  403 => 313,  401 => 190,  395 => 187,  391 => 186,  387 => 185,  383 => 75,  379 => 183,  375 => 182,  372 => 181,  369 => 71,  366 => 179,  363 => 178,  355 => 65,  343 => 166,  335 => 165,  329 => 161,  322 => 157,  318 => 155,  305 => 145,  296 => 144,  293 => 143,  290 => 142,  287 => 141,  284 => 140,  282 => 45,  279 => 138,  276 => 43,  273 => 136,  270 => 135,  267 => 134,  265 => 38,  262 => 132,  259 => 131,  256 => 130,  254 => 129,  251 => 128,  248 => 127,  245 => 126,  243 => 125,  240 => 32,  238 => 123,  231 => 118,  225 => 116,  223 => 115,  220 => 24,  218 => 113,  210 => 108,  200 => 101,  195 => 99,  186 => 93,  181 => 91,  172 => 85,  167 => 83,  163 => 82,  160 => 81,  154 => 70,  151 => 69,  148 => 68,  142 => 66,  139 => 65,  136 => 64,  133 => 7,  128 => 59,  123 => 60,  121 => 59,  116 => 57,  108 => 52,  100 => 3,  92 => 42,  84 => 37,  73 => 174,  66 => 14,  58 => 138,  55 => 132,  52 => 126,);
    }
}
