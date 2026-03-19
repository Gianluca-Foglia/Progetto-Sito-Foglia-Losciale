<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Category;

class CreateArticleForm extends Component
{
    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|min:10')]
    public $description;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;


    public function save() {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);
        $this->cleanForm();
        session()->flash('success', 'Articolo creato con successo!');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.create-article-form', compact('categories'));
    }

    protected function cleanForm() {
    $this->title = '';
    $this->description = '';
    $this->price = '';
    $this->category = '';
}
}

