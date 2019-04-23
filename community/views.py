from django.shortcuts import render
from community.forms import *

# Create your views here.
def write(request):
    if request.method =='POST':
        form = Form(request.POST)
        if form.is_valid():
            form.save()
            form = Form()
    else:
        form = Form()

    return render(request, 'write.html',{'form':form})


def test(request):
    return render(request, '111.html')

def list(request):
    articleList = Article.objects.all()
    return render(request, 'list.html',{'articleList': articleList})

def first(request):
    return render(request, 'first.html')

def view(request, num="1"):
    article = Article.objects.get(id=num)
    return render(request, 'view.html',{'article':article})
