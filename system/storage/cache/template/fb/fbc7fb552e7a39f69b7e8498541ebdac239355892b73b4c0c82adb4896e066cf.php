<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/theme/new_theme.twig */
class __TwigTemplate_afb668d9796a11b89bf5e9c783a643e50f919c4f483e70c2b2067c3e854c9137 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo ($context["text_general"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-directory\"><span data-toggle=\"tooltip\" title=\"";
        // line 31
        echo ($context["help_directory"] ?? null);
        echo "\">";
        echo ($context["entry_directory"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"theme_new_theme_directory\" id=\"input-directory\" class=\"form-control\">
                  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["directories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 35
            echo "                  ";
            if (($context["directory"] == ($context["theme_new_theme_directory"] ?? null))) {
                // line 36
                echo "                  <option value=\"";
                echo $context["directory"];
                echo "\" selected=\"selected\">";
                echo $context["directory"];
                echo "</option>
                  ";
            } else {
                // line 38
                echo "                  <option value=\"";
                echo $context["directory"];
                echo "\">";
                echo $context["directory"];
                echo "</option>
                  ";
            }
            // line 40
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </select>
              </div>
            </div>

            ";
        // line 45
        if (($context["new_theme_screenshot"] ?? null)) {
            // line 46
            echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">Preview</label>
              <div class=\"col-sm-10\">
                <img src=\"";
            // line 49
            echo ($context["new_theme_screenshot"] ?? null);
            echo "\" alt=\"New Theme Preview\" title=\"New Theme Preview\" class=\"img-thumbnail\" style=\"max-height: 200px;\" />
              </div>
            </div>
            ";
        }
        // line 53
        echo "
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 55
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_new_theme_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 58
        if (($context["theme_new_theme_status"] ?? null)) {
            // line 59
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 60
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 62
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 63
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 65
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 70
        echo ($context["text_product"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 72
        echo ($context["help_product_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_limit"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_new_theme_product_limit\" value=\"";
        // line 74
        echo ($context["theme_new_theme_product_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
                ";
        // line 75
        if (($context["error_product_limit"] ?? null)) {
            // line 76
            echo "                <div class=\"text-danger\">";
            echo ($context["error_product_limit"] ?? null);
            echo "</div>
                ";
        }
        // line 78
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 81
        echo ($context["help_product_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_product_description_length"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_new_theme_product_description_length\" value=\"";
        // line 83
        echo ($context["theme_new_theme_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
                ";
        // line 84
        if (($context["error_product_description_length"] ?? null)) {
            // line 85
            echo "                <div class=\"text-danger\">";
            echo ($context["error_product_description_length"] ?? null);
            echo "</div>
                ";
        }
        // line 87
        echo "              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 91
        echo ($context["text_image"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 93
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_category_width\" value=\"";
        // line 97
        echo ($context["theme_new_theme_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_category_height\" value=\"";
        // line 100
        echo ($context["theme_new_theme_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 103
        if (($context["error_image_category"] ?? null)) {
            // line 104
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_category"] ?? null);
            echo "</div>
                ";
        }
        // line 106
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 109
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_thumb_width\" value=\"";
        // line 113
        echo ($context["theme_new_theme_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_thumb_height\" value=\"";
        // line 116
        echo ($context["theme_new_theme_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 119
        if (($context["error_image_thumb"] ?? null)) {
            // line 120
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_thumb"] ?? null);
            echo "</div>
                ";
        }
        // line 122
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 125
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_popup_width\" value=\"";
        // line 129
        echo ($context["theme_new_theme_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_popup_height\" value=\"";
        // line 132
        echo ($context["theme_new_theme_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 135
        if (($context["error_image_popup"] ?? null)) {
            // line 136
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_popup"] ?? null);
            echo "</div>
                ";
        }
        // line 138
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 141
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_product_width\" value=\"";
        // line 145
        echo ($context["theme_new_theme_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_product_height\" value=\"";
        // line 148
        echo ($context["theme_new_theme_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 151
        if (($context["error_image_product"] ?? null)) {
            // line 152
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_product"] ?? null);
            echo "</div>
                ";
        }
        // line 154
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 157
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_additional_width\" value=\"";
        // line 161
        echo ($context["theme_new_theme_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_additional_height\" value=\"";
        // line 164
        echo ($context["theme_new_theme_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 167
        if (($context["error_image_additional"] ?? null)) {
            // line 168
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_additional"] ?? null);
            echo "</div>
                ";
        }
        // line 170
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 173
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_related_width\" value=\"";
        // line 177
        echo ($context["theme_new_theme_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_related_height\" value=\"";
        // line 180
        echo ($context["theme_new_theme_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 183
        if (($context["error_image_related"] ?? null)) {
            // line 184
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_related"] ?? null);
            echo "</div>
                ";
        }
        // line 186
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 189
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_compare_width\" value=\"";
        // line 193
        echo ($context["theme_new_theme_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_compare_height\" value=\"";
        // line 196
        echo ($context["theme_new_theme_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 199
        if (($context["error_image_compare"] ?? null)) {
            // line 200
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_compare"] ?? null);
            echo "</div>
                ";
        }
        // line 202
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 205
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_wishlist_width\" value=\"";
        // line 209
        echo ($context["theme_new_theme_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_wishlist_height\" value=\"";
        // line 212
        echo ($context["theme_new_theme_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 215
        if (($context["error_image_wishlist"] ?? null)) {
            // line 216
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_wishlist"] ?? null);
            echo "</div>
                ";
        }
        // line 218
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 221
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_cart_width\" value=\"";
        // line 225
        echo ($context["theme_new_theme_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_cart_height\" value=\"";
        // line 228
        echo ($context["theme_new_theme_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 231
        if (($context["error_image_cart"] ?? null)) {
            // line 232
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_cart"] ?? null);
            echo "</div>
                ";
        }
        // line 234
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 237
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_location_width\" value=\"";
        // line 241
        echo ($context["theme_new_theme_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_new_theme_image_location_height\" value=\"";
        // line 244
        echo ($context["theme_new_theme_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 247
        if (($context["error_image_location"] ?? null)) {
            // line 248
            echo "                <div class=\"text-danger\">";
            echo ($context["error_image_location"] ?? null);
            echo "</div>
                ";
        }
        // line 250
        echo "              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 258
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/theme/new_theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 258,  626 => 250,  620 => 248,  618 => 247,  610 => 244,  602 => 241,  595 => 237,  590 => 234,  584 => 232,  582 => 231,  574 => 228,  566 => 225,  559 => 221,  554 => 218,  548 => 216,  546 => 215,  538 => 212,  530 => 209,  523 => 205,  518 => 202,  512 => 200,  510 => 199,  502 => 196,  494 => 193,  487 => 189,  482 => 186,  476 => 184,  474 => 183,  466 => 180,  458 => 177,  451 => 173,  446 => 170,  440 => 168,  438 => 167,  430 => 164,  422 => 161,  415 => 157,  410 => 154,  404 => 152,  402 => 151,  394 => 148,  386 => 145,  379 => 141,  374 => 138,  368 => 136,  366 => 135,  358 => 132,  350 => 129,  343 => 125,  338 => 122,  332 => 120,  330 => 119,  322 => 116,  314 => 113,  307 => 109,  302 => 106,  296 => 104,  294 => 103,  286 => 100,  278 => 97,  271 => 93,  266 => 91,  260 => 87,  254 => 85,  252 => 84,  246 => 83,  239 => 81,  234 => 78,  228 => 76,  226 => 75,  220 => 74,  213 => 72,  208 => 70,  201 => 65,  196 => 63,  191 => 62,  186 => 60,  181 => 59,  179 => 58,  173 => 55,  169 => 53,  162 => 49,  157 => 46,  155 => 45,  149 => 41,  143 => 40,  135 => 38,  127 => 36,  124 => 35,  120 => 34,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/theme/new_theme.twig", "");
    }
}
