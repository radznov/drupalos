<?php

/* @webprofiler/Collector/devel.html.twig */
class __TwigTemplate_8cebdd9ff9eb6f885da5c6f48c36608e164f958a9d73210fba876bd789d3dc15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ab8ef39d706f1b157db33cf658eb772fd5f113d0a932781939ae5ba47d4b86c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab8ef39d706f1b157db33cf658eb772fd5f113d0a932781939ae5ba47d4b86c->enter($__internal_6ab8ef39d706f1b157db33cf658eb772fd5f113d0a932781939ae5ba47d4b86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/devel.html.twig"));

        $tags = array("block" => 1, "set" => 2, "spaceless" => 10, "for" => 11);
        $filters = array("t" => 3, "default" => 20);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set', 'spaceless', 'for'),
                array('t', 'default'),
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
        
        $__internal_6ab8ef39d706f1b157db33cf658eb772fd5f113d0a932781939ae5ba47d4b86c->leave($__internal_6ab8ef39d706f1b157db33cf658eb772fd5f113d0a932781939ae5ba47d4b86c_prof);

    }

    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b4eda932dba2ab6546d4c265fbdbc5d7de71f82770c2beafec317a98eee3b3e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4eda932dba2ab6546d4c265fbdbc5d7de71f82770c2beafec317a98eee3b3e->enter($__internal_4b4eda932dba2ab6546d4c265fbdbc5d7de71f82770c2beafec317a98eee3b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("devel.admin_settings")));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Devel menu")));
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "title", array()), "html", null, true));
        echo "\"
                 src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        ob_start();
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "links", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["item"], "html", null, true));
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 17
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>

";
        
        $__internal_4b4eda932dba2ab6546d4c265fbdbc5d7de71f82770c2beafec317a98eee3b3e->leave($__internal_4b4eda932dba2ab6546d4c265fbdbc5d7de71f82770c2beafec317a98eee3b3e_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/devel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 21,  114 => 20,  110 => 18,  107 => 17,  104 => 16,  95 => 13,  92 => 12,  87 => 11,  84 => 10,  82 => 9,  79 => 8,  73 => 5,  69 => 4,  62 => 3,  59 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/devel.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\modules\\devel\\webprofiler\\templates\\Collector\\devel.html.twig");
    }
}
