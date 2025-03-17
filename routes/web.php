<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CancellationPolicyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DimensionController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\FabricController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\PrefixController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionalController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TermsConditionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VatController;
use App\Http\Controllers\Admin\WearController;
use App\Http\Controllers\Admin\WeightController;
use App\Http\Controllers\Frontend\AddressController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\CartItemController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\Frontend\SubscriptionController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::patch('users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->name('users.toggle-status');
    Route::get('/users/{user}/assign-customer-id', [UserController::class, 'assignCustomerID'])->name('users.assignCustomerID');
    Route::post('/users/{user}/store-customer-id', [UserController::class, 'storeCustomerID'])->name('users.storeCustomerID');

    // SubscriptionController

    Route::get('/subscriptions', [DashboardController::class, 'subscription'])->name('subscriptions.index'); // List all subscriptions
    Route::delete('/subscriptions/{id}', [DashboardController::class, 'destroy'])->name('subscriptions.destroy'); // Delete subscription


    // Master Crud Routes


    // PrefixController
    Route::resource('prefix', PrefixController::class);
    // SizeController
    Route::resource('size', SizeController::class);
    // WeightController
    Route::resource('weight', WeightController::class);
    // ColorController
    Route::resource('colors', ColorController::class);
    // PriceController
    Route::resource('price', PriceController::class);
    // DiscountController
    Route::resource('discount', DiscountController::class);
    //  CountryController
    Route::resource('country', CountryController::class);
    Route::patch('country/{country}/toggle-status', [CountryController::class, 'toggleStatus'])
        ->name('country.toggle-status');
    //  VatController
    Route::resource('vat', VatController::class);
    //  DepartmentController
    Route::resource('department', DepartmentController::class);
    //  BrandController
    Route::resource('brand', BrandController::class);
    // CategoryController
    Route::resource('category', CategoryController::class);
    // SubCategoryController
    Route::resource('subcategory', SubCategoryController::class);
    // MaterialController
    Route::resource('material', MaterialController::class);
    // ArticleController
    Route::resource('article', ArticleController::class);
    // CertificationController
    Route::resource('certification', CertificationController::class);
    // WearController
    Route::resource('wear', WearController::class);
    // PromotionalController
    Route::resource('promotional', PromotionalController::class);
    // FabricController
    Route::resource('fabric', FabricController::class);
    // DimensionController
    Route::resource('dimension', DimensionController::class);












    // BannerController
    Route::resource('banners', BannerController::class);

    // ProductController
    Route::resource('products', ProductController::class);
    // BannerController Custom route for toggling status
    Route::patch('banners/{banner}/toggle-status', [BannerController::class, 'toggleStatus'])->name('banners.toggle-status');


    // FaqController
    Route::resource('faq', FaqController::class);
    Route::patch('faq/{faq}/toggle-status', [FaqController::class, 'toggleStatus'])->name('faq.toggleStatus');
    // CancellationPolicyController
    Route::resource('cancellation-policy', CancellationPolicyController::class);
    // AboutUsController
    Route::resource('aboutus', AboutUsController::class);

    //PrivacyController
    Route::resource('privacy', PrivacyPolicyController::class);

    // TermsAndConditionController
    Route::resource('termscondition', TermsConditionController::class);


    // Change Password
    Route::get('change-password', [ChangePasswordController::class, 'changePassword'])->name('password.change.index');
    Route::post('change-password', [ChangePasswordController::class, 'changePasswordUpdate'])->name('password.change');
});

require __DIR__ . '/auth.php';



// Frontend Controller

// AuthController
Route::get('/company-login', [AuthController::class, 'userLogin'])->name('frontend.login');
Route::post('/company-login', [AuthController::class, 'Login'])->name('post.frontend.login');
Route::get('/company-register', [AuthController::class, 'userRegister'])->name('frontend.register');
Route::post('/company-register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('frontend.logout');


// SubscriptionController
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('frontend.subscribe');


// ProductController
Route::get('/', [FrontendController::class, 'publicHome'])->name('frontend.home');
Route::get('/product-page/{id}', [FrontendProductController::class, 'productPage'])->name('frontend.all.product-page');





// Private (Logged-In) Homepage
Route::middleware(['company', 'company.auth.status'])->group(function () {

    Route::get('/user-dashboard', [FrontendController::class, 'publicPrivateHome'])->name('frontend.home.private');
    Route::get('/all-products', [FrontendProductController::class, 'allProduct'])->name('frontend.all.product');
    Route::any('/confirm-order', [FrontendProductController::class, 'confirmOrder'])->name('frontend.confirm-order');

    Route::post('/place-order', [OrderController::class, 'storeOrder'])->name('order.store');


    Route::get('/my-cart', [CartItemController::class, 'myCart'])->name('frontend.my-cart');
    Route::post('/cart/add', [CartItemController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartItemController::class, 'updateCartItem'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartItemController::class, 'removeCartItem'])->name('cart.remove');



    Route::get('/product-logged', [FrontendProductController::class, 'productLogged'])->name('frontend.product-logged');
    // Route::get('/select-address', [FrontendProductController::class, 'selectAddress'])->name('frontend.select-address');

    Route::resource('addresses', AddressController::class);
});
