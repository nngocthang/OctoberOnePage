<?php

/* C:\ThangNN\WS\xampp\htdocs\OnePageLanding/themes/responsiv-clean/pages/blog/post.htm */
class __TwigTemplate_67f6e5e1ed85aac1450060b5817c5eca5b56f356c1818cf15c718ac2a04fa730 extends Twig_Template
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
        $context["nextPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "nextPost", array());
        // line 3
        $context["lastPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "previousPost", array());
        // line 4
        echo "
<div class=\"post-single\">
    <article>
        ";
        // line 7
        if (($context["image"] ?? null)) {
            // line 8
            echo "            <div class=\"post-image\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 12
        echo "        <header class=\"post-title\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
        </header>

        <div class=\"post-content\">
            ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", array());
        echo "
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
            ";
        // line 23
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    ";
            // line 26
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
                // line 27
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "                    ";
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
            // line 29
            echo "                </span>
            ";
        }
        // line 31
        echo "        </footer>
    </article>
    <nav class=\"post-links\">
        ";
        // line 34
        if (($context["lastPost"] ?? null)) {
            // line 35
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastPost"] ?? null), "url", array()), "html", null, true);
            echo "\" class=\"link-previous\">
                <p>Previous</p>
                <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastPost"] ?? null), "title", array()), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 40
        echo "        ";
        if (($context["nextPost"] ?? null)) {
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "url", array()), "html", null, true);
            echo "\" class=\"link-next\">
                <p>Next</p>
                <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "title", array()), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 46
        echo "    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/responsiv-clean/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  147 => 43,  141 => 41,  138 => 40,  132 => 37,  126 => 35,  124 => 34,  119 => 31,  115 => 29,  101 => 28,  92 => 27,  75 => 26,  68 => 23,  64 => 21,  57 => 17,  50 => 13,  47 => 12,  39 => 9,  36 => 8,  34 => 7,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = post.featured_images.first %}
{% set nextPost = blogPost.nextPost %}
{% set lastPost = blogPost.previousPost %}

<div class=\"post-single\">
    <article>
        {% if image %}
            <div class=\"post-image\">
                <img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" />
            </div>
        {% endif %}
        <header class=\"post-title\">
            <h1>{{ post.title }}</h1>
        </header>

        <div class=\"post-content\">
            {{ post.content_html|raw }}
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
    </article>
    <nav class=\"post-links\">
        {% if lastPost %}
            <a href=\"{{ lastPost.url }}\" class=\"link-previous\">
                <p>Previous</p>
                <span>{{ lastPost.title }}</span>
            </a>
        {% endif %}
        {% if nextPost %}
            <a href=\"{{ nextPost.url }}\" class=\"link-next\">
                <p>Next</p>
                <span>{{ nextPost.title }}</span>
            </a>
        {% endif %}
    </nav>
</div>", "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/responsiv-clean/pages/blog/post.htm", "");
    }
}
