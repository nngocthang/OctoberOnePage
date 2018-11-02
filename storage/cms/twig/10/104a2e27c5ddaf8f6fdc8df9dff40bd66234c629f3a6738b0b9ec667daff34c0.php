<?php

/* C:\ThangNN\WS\xampp\htdocs\OnePageLanding/themes/responsiv-clean/partials/blog/post.htm */
class __TwigTemplate_140290208a4b17f1d24e55bd02905735fcb8e9e35e8d764b324af66888d6ce5b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", array()), "first", array());
        // line 2
        echo "<article>

    ";
        // line 4
        if (($context["image"] ?? null)) {
            // line 5
            echo "        <div class=\"post-image\">
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" /></a>
        </div>
    ";
        } else {
            // line 9
            echo "        <header class=\"post-title\">
            <h1><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "</a></h1>
        </header>
    ";
        }
        // line 13
        echo "
    <div class=\"post-content\">
        ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", array());
        echo "
    </div>

    <footer>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
        ";
        // line 21
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in
            <span class=\"category\">
                <i class=\"icon icon-folder-open\"></i>
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </span>
        ";
        }
        // line 29
        echo "    </footer>
</article>";
    }

    public function getTemplateName()
    {
        return "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/responsiv-clean/partials/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  117 => 27,  103 => 26,  94 => 25,  77 => 24,  70 => 21,  66 => 19,  59 => 15,  55 => 13,  47 => 10,  44 => 9,  34 => 6,  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = post.featured_images.first %}
<article>

    {% if image %}
        <div class=\"post-image\">
            <a href=\"{{ post.url }}\"><img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" /></a>
        </div>
    {% else %}
        <header class=\"post-title\">
            <h1><a href=\"{{ post.url }}\">{{ post.title }}</a></h1>
        </header>
    {% endif %}

    <div class=\"post-content\">
        {{ post.summary|raw }}
    </div>

    <footer>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> {{ post.published_at|date('M d, Y') }}</span>
        {# <span class=\"author\"><i class=\"icon icon-user\"></i> {{ post.author.full_name }}</span> #}
        {% if post.categories.count %} in
            <span class=\"category\">
                <i class=\"icon icon-folder-open\"></i>
                {% for category in post.categories %}
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                {% endfor %}
            </span>
        {% endif %}
    </footer>
</article>", "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/responsiv-clean/partials/blog/post.htm", "");
    }
}
