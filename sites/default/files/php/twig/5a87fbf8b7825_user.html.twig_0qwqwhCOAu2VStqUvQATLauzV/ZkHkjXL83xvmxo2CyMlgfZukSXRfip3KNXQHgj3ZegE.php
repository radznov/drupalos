<?php

/* @webprofiler/Collector/user.html.twig */
class __TwigTemplate_4616091b92cb6302bee6d9ca7d150b0f10008627f3ec303efbe2361b2d978b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99f92209d6b6c6a6c83df9839dfe0129e12d2102bb53726ff12884ada1a881f3 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f92209d6b6c6a6c83df9839dfe0129e12d2102bb53726ff12884ada1a881f3->enter($__internal_99f92209d6b6c6a6c83df9839dfe0129e12d2102bb53726ff12884ada1a881f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/user.html.twig"));

        $tags = array("block" => 1, "set" => 2, "if" => 8);
        $filters = array("t" => 4, "join" => 22, "default" => 34);
        $functions = array("url" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set', 'if'),
                array('t', 'join', 'default'),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99f92209d6b6c6a6c83df9839dfe0129e12d2102bb53726ff12884ada1a881f3->leave($__internal_99f92209d6b6c6a6c83df9839dfe0129e12d2102bb53726ff12884ada1a881f3_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4da4703709284aea82ec6ed5b895f10c6f608a9f37c4c25064102f57cb121344 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da4703709284aea82ec6ed5b895f10c6f608a9f37c4c25064102f57cb121344->enter($__internal_4da4703709284aea82ec6ed5b895f10c6f608a9f37c4c25064102f57cb121344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        $context["color_code"] = (($this->getAttribute(($context["collector"] ?? null), "authenticated", array())) ? ("green") : ("red"));
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "user")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("User")));
        echo "\">
        <img width=\"24\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("User")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_code"] ?? null), "html", null, true));
        echo "\">
            ";
        // line 8
        if ($this->getAttribute(($context["collector"] ?? null), "authenticated", array())) {
            // line 9
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "username", array()), "html", null, true));
            echo "
            ";
        }
        // line 11
        echo "        </span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "authenticated", array())) {
            // line 16
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logged in as")));
            echo "</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_code"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "username", array()), "html", null, true));
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Roles")));
            echo "</b>
            <span>";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->getAttribute(($context["collector"] ?? null), "roles", array()), ", "), "html", null, true));
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Authenticated by")));
            echo "</b>
            <span>";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "provider", array()), "html", null, true));
            echo "</span>
        </div>
    ";
        } else {
            // line 29
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "anonymous", array()), "html", null, true));
            echo "
    ";
        }
        // line 31
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_4da4703709284aea82ec6ed5b895f10c6f608a9f37c4c25064102f57cb121344->leave($__internal_4da4703709284aea82ec6ed5b895f10c6f608a9f37c4c25064102f57cb121344_prof);

    }

    // line 39
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ab8befd04fb2df7d8865095c0fdb0b6df6830e31beac9a0e03e18af0d6e15c3 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab8befd04fb2df7d8865095c0fdb0b6df6830e31beac9a0e03e18af0d6e15c3->enter($__internal_5ab8befd04fb2df7d8865095c0fdb0b6df6830e31beac9a0e03e18af0d6e15c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 40
        echo "    <script id=\"user\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("User")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <tr>
                    <th>";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</th>
                    <td><%- data.name %></td>
                </tr>
                <tr>
                    <th>";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Authenticated")));
        echo "</th>
                    <td><%- data.authenticated %></td>
                </tr>
                <tr>
                    <th>";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Provider")));
        echo "</th>
                    <td><%- data.provider %></td>
                </tr>
                <tr>
                    <th>";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Roles")));
        echo "</th>
                    <td><%- data.roles.join(', ') %></td>
                </tr>
            </table>
        </div>
    </script>
";
        
        $__internal_5ab8befd04fb2df7d8865095c0fdb0b6df6830e31beac9a0e03e18af0d6e15c3->leave($__internal_5ab8befd04fb2df7d8865095c0fdb0b6df6830e31beac9a0e03e18af0d6e15c3_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 57,  202 => 53,  195 => 49,  188 => 45,  181 => 41,  178 => 40,  172 => 39,  162 => 35,  158 => 34,  154 => 32,  151 => 31,  145 => 29,  139 => 26,  135 => 25,  129 => 22,  125 => 21,  117 => 18,  113 => 17,  110 => 16,  107 => 15,  104 => 14,  99 => 11,  93 => 9,  91 => 8,  87 => 7,  83 => 6,  79 => 5,  72 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 39,  50 => 38,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/user.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\modules\\devel\\webprofiler\\templates\\Collector\\user.html.twig");
    }
}
