from django.shortcuts import render
from django.http import HttpResponse


def home_page_view(request):
    return HttpResponse("Homepage")


def about_page_view(request):
    context = {
        "name": "Ahmad Dzikri Dewantara",
        "age": 21,
    }
    return render(request, "pages/about.html", context)


# Create your views here.
