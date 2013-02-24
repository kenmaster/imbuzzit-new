<?php

/* ImbuzzitApiBundle:User:show.html.twig */
class __TwigTemplate_c1e23ac46fd898a8d9e532828724ac5a extends Twig_Template
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
        // line 1
        echo "<h1>User</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Isactive</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "isActive"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Birthday</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "birthday"), "Y-m-d"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Sexe</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sexe"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Account_birthday</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "accountbirthday"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Biography</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "biography"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>City</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "city"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Influence</th>
            <td>
              ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "influence"));
        foreach ($context['_seq'] as $context["_key"] => $context["inf"]) {
            // line 53
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "inf"), "html", null, true);
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inf'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "            </td>
        </tr>
        <tr>
            <th>Equipment</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "equipment"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Last_connect</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastconnect"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_user_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ImbuzzitApiBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 81,  90 => 43,  62 => 27,  124 => 59,  112 => 41,  97 => 47,  87 => 32,  77 => 30,  69 => 31,  65 => 27,  40 => 12,  23 => 3,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 70,  135 => 47,  126 => 45,  109 => 53,  103 => 37,  67 => 15,  61 => 26,  47 => 9,  105 => 52,  93 => 33,  76 => 35,  72 => 14,  68 => 12,  27 => 7,  91 => 20,  84 => 28,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 55,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 75,  145 => 46,  139 => 55,  131 => 63,  123 => 41,  120 => 40,  115 => 39,  106 => 38,  101 => 32,  96 => 21,  83 => 39,  80 => 24,  74 => 16,  66 => 15,  55 => 23,  52 => 18,  50 => 10,  43 => 7,  41 => 15,  37 => 8,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 80,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 29,  64 => 17,  60 => 23,  57 => 25,  54 => 10,  51 => 24,  48 => 19,  45 => 22,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
