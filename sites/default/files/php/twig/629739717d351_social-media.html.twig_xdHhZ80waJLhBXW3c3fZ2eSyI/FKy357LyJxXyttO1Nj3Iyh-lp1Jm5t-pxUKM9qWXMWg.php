<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/thomas_more_social_media/templates/social-media.html.twig */
class __TwigTemplate_398bf69ed51ee40c1522fbc819a2925de0688c6c4464b8cb2adcb450aeaefdb2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"social-media js-social-media-links\">
  <a href=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
        echo "\" class=\"facebook\" target=\"_blank\" data-network=\"facebook\">
    <i class=\"fab fa-3x fa-facebook\"></i>
    <span class=\"social-media-count\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_count"] ?? null)), "html", null, true);
        echo "</span>
  </a>
  <a href=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
        echo "\" class=\"google-plus\" target=\"_blank\" data-network=\"google_plus\">
    <i class=\"fab fa-3x fa-google-plus\"></i>
    <span class=\"social-media-count\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_count"] ?? null)), "html", null, true);
        echo "</span>
  </a>
  <a href=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
        echo "\" class=\"twitter\" target=\"_blank\" data-network=\"twitter\">
    <i class=\"fab fa-3x fa-twitter\"></i>
    <span class=\"social-media-count\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_count"] ?? null)), "html", null, true);
        echo "</span>
  </a>
  <a href=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
        echo "\" class=\"linkedin\" target=\"_blank\" data-network=\"linkedin\">
    <i class=\"fab fa-3x fa-linkedin\"></i>
    <span class=\"social-media-count\">";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_count"] ?? null)), "html", null, true);
        echo "</span>
  </a>
  <a href=\"";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["foursquare_url"] ?? null)), "html", null, true);
        echo "\" class=\"foursquare\" target=\"_blank\" data-network=\"foursquare\">
    <i class=\"fab fa-3x fa-foursquare\"></i>
    <span class=\"social-media-count\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["foursquare_count"] ?? null)), "html", null, true);
        echo "</span>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/thomas_more_social_media/templates/social-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  98 => 18,  93 => 16,  88 => 14,  83 => 12,  78 => 10,  73 => 8,  68 => 6,  63 => 4,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"social-media js-social-media-links\">
  <a href=\"{{ facebook_url }}\" class=\"facebook\" target=\"_blank\" data-network=\"facebook\">
    <i class=\"fab fa-3x fa-facebook\"></i>
    <span class=\"social-media-count\">{{ facebook_count }}</span>
  </a>
  <a href=\"{{ google_plus_url }}\" class=\"google-plus\" target=\"_blank\" data-network=\"google_plus\">
    <i class=\"fab fa-3x fa-google-plus\"></i>
    <span class=\"social-media-count\">{{ google_plus_count }}</span>
  </a>
  <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" data-network=\"twitter\">
    <i class=\"fab fa-3x fa-twitter\"></i>
    <span class=\"social-media-count\">{{ twitter_count }}</span>
  </a>
  <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\" data-network=\"linkedin\">
    <i class=\"fab fa-3x fa-linkedin\"></i>
    <span class=\"social-media-count\">{{ linkedin_count }}</span>
  </a>
  <a href=\"{{ foursquare_url }}\" class=\"foursquare\" target=\"_blank\" data-network=\"foursquare\">
    <i class=\"fab fa-3x fa-foursquare\"></i>
    <span class=\"social-media-count\">{{ foursquare_count }}</span>
  </a>
</div>
", "modules/custom/thomas_more_social_media/templates/social-media.html.twig", "C:\\xampp\\htdocs\\site\\modules\\custom\\thomas_more_social_media\\templates\\social-media.html.twig");
    }
}
