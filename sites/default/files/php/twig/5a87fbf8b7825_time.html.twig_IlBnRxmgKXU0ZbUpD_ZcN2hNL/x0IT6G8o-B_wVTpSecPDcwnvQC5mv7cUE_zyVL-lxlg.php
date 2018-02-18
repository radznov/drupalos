<?php

/* @webprofiler/Collector/time.html.twig */
class __TwigTemplate_531b9689e13b6e65d5f6504ec998341b5235ce708a420fedc2cc8959cd2ae6c2 extends Twig_Template
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
        $__internal_307070956cfceb98aa3341fb668b4bc834d9b6e2649c8ad409599db37161ce3a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_307070956cfceb98aa3341fb668b4bc834d9b6e2649c8ad409599db37161ce3a->enter($__internal_307070956cfceb98aa3341fb668b4bc834d9b6e2649c8ad409599db37161ce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/time.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("length" => 2, "format" => 2, "escape" => 4, "t" => 6, "default" => 24);
        $functions = array("url" => 6);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set'),
                array('length', 'format', 'escape', 't', 'default'),
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
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_307070956cfceb98aa3341fb668b4bc834d9b6e2649c8ad409599db37161ce3a->leave($__internal_307070956cfceb98aa3341fb668b4bc834d9b6e2649c8ad409599db37161ce3a_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c89ea95021b8521d59df931f43a57b48e005f7bef6bacd81f334263f55f8e53a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89ea95021b8521d59df931f43a57b48e005f7bef6bacd81f334263f55f8e53a->enter($__internal_c89ea95021b8521d59df931f43a57b48e005f7bef6bacd81f334263f55f8e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "events", array()))) ? (sprintf("%.0f ms", $this->getAttribute(($context["collector"] ?? null), "duration", array()))) : ("n/a"));
        // line 3
        echo "    ";
        $context["memory"] = sprintf("%.1f MB", (($this->getAttribute(($context["collector"] ?? null), "memory", array()) / 1024) / 1024));
        // line 4
        echo "    ";
        $context["total_memory"] = ((($this->getAttribute(($context["collector"] ?? null), "memoryLimit", array()) ==  -1)) ? ("&infin;") : ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, sprintf("%.1f MB", ($this->getAttribute(($context["collector"] ?? null), "memoryLimit", array()) / 1024)))));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "time")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Timeline")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Timeline")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["duration"] ?? null), "html", null, true));
        echo " / ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["memory"] ?? null), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total time")));
        echo "</b>
        <span>";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["duration"] ?? null), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Memory")));
        echo "</b>
        <span>";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["memory"] ?? null), "html", null, true));
        echo " / ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["total_memory"] ?? null), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_c89ea95021b8521d59df931f43a57b48e005f7bef6bacd81f334263f55f8e53a->leave($__internal_c89ea95021b8521d59df931f43a57b48e005f7bef6bacd81f334263f55f8e53a_prof);

    }

    // line 29
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da0f96d96e185670e7a5061038b3c204a5defad557103ea687aae1b043b6862a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0f96d96e185670e7a5061038b3c204a5defad557103ea687aae1b043b6862a->enter($__internal_da0f96d96e185670e7a5061038b3c204a5defad557103ea687aae1b043b6862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 30
        echo "    <script id=\"time\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Timeline")));
        echo "</h2>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li>
                    <b>";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total time")));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(data.duration) %>
                </li>
                <li>
                    <b>";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Initialization time")));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(data.initTime) %>
                </li>
            </ul>
            <br/><br/>

            <div class=\"timeline\">
                <div class=\"timeline__legends\">
                    <span class=\"timeline__legends--default\">default</span>
                    <span class=\"timeline__legends--section\">section</span>
                    <span class=\"timeline__legends--event_listener\">event_listener</span>
                    <span class=\"timeline__legends--event_listener_loading\">event_listener_loading</span>
                    <span class=\"timeline__legends--template\">template</span>
                    <span class=\"timeline__legends--service\">service</span>
                </div>

                <div id=\"timeline\"></div>
            </div>
        </div>

    </script>
";
        
        $__internal_da0f96d96e185670e7a5061038b3c204a5defad557103ea687aae1b043b6862a->leave($__internal_da0f96d96e185670e7a5061038b3c204a5defad557103ea687aae1b043b6862a_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/time.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 39,  164 => 36,  156 => 31,  153 => 30,  147 => 29,  137 => 25,  133 => 24,  129 => 22,  121 => 19,  117 => 18,  111 => 15,  107 => 14,  104 => 13,  101 => 12,  93 => 9,  89 => 8,  85 => 7,  78 => 6,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 29,  50 => 28,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/time.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\modules\\devel\\webprofiler\\templates\\Collector\\time.html.twig");
    }
}
