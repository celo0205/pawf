from django.shortcuts import render


def home_page_view(request):
    context = {
        "inventory_list": ["Widget 1", "Widget 2", "Widget 3"],
        "greeting": "THAnk you FOR visitING.",
    }
    return render(request, "home.html", context)


from django.views.generic import TemplateView


class AboutPageView(TemplateView):
    template_name = "about.html"
