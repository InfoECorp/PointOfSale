<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AdjustedProduct
 *
 * @property int $id
 * @property int $adjustment_id
 * @property int $product_id
 * @property int $quantity
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Adjustment $adjustment
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereAdjustmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereDeletedAt($value)
 * @property int|null $warehouse_id
 * @property-read \App\Models\Product|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustedProduct whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class AdjustedProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Adjustment
 *
 * @property int $id
 * @property string $date
 * @property string $reference
 * @property string|null $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\AdjustedProduct> $adjustedProducts
 * @property-read int|null $adjusted_products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereDeletedAt($value)
 * @mixin \Eloquent
 */
	class Adjustment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Brand
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Brand advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\BrandFactory factory(...$parameters)
 * @mixin \Eloquent
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CashRegister
 *
 * @property int $id
 * @property float $cash_in_hand
 * @property int|null $user_id
 * @property int|null $warehouse_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister query()
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereCashInHand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister advancedFilter($data)
 * @mixin \Eloquent
 */
	class CashRegister extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $symbol
 * @property string $thousand_separator
 * @property string $decimal_separator
 * @property int|null $exchange_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDecimalSeparator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereThousandSeparator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDeletedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\CurrencyFactory factory($count = null, $state = [])
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $email
 * @property string|null $city
 * @property string|null $country
 * @property string|null $address
 * @property string|null $tax_number
 * @property int|null $wallet_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Sale|null $sales
 * @property-read \App\Models\Wallet|null $wallet
 * @method static \Illuminate\Database\Eloquent\Builder|Customer advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTaxNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereWalletId($value)
 * @property string $uuid
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUuid($value)
 * @method static \Database\Factories\CustomerFactory factory($count = null, $state = [])
 * @property-read int|float $profit
 * @property-read int|float $total_due
 * @property-read int|float $total_payments
 * @property-read int|float $total_sale_returns
 * @property-read int|float $total_sales
 * @mixin \Eloquent
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Expense
 *
 * @property int $id
 * @property int $category_id
 * @property int|null $user_id
 * @property int|null $warehouse_id
 * @property \Illuminate\Support\Carbon $date
 * @property string $reference
 * @property string $details
 * @property float $amount
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ExpenseCategory $category
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Expense advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereWarehouseId($value)
 * @property string|null $document
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDocument($value)
 * @mixin \Eloquent
 */
	class Expense extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExpenseCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Expense> $expenses
 * @property-read int|null $expenses_count
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereUpdatedAt($value)
 * @method static \Database\Factories\ExpenseCategoryFactory factory(...$parameters)
 * @property string|null $type
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereType($value)
 * @mixin \Eloquent
 */
	class ExpenseCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Integration
 *
 * @property int $id
 * @property string $uuid
 * @property IntegrationType $type
 * @property string|null $store_url
 * @property string|null $api_key
 * @property string|null $sandbox
 * @property string|null $api_secret
 * @property string|null $last_sync
 * @property string|null $products
 * @property string|null $orders
 * @property Status $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Integration advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Integration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Integration query()
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereApiKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereApiSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereLastSync($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereOrders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereProducts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereSandbox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereStoreUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereUuid($value)
 * @mixin \Eloquent
 */
	class Integration extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Invoice
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @mixin \Eloquent
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $rtl
 * @property string $status
 * @property string $is_default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereRtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Product> $products
 * @property-read int|null $products_count
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDeletedAt($value)
 * @mixin \Eloquent
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Movement
 *
 * @property int $id
 * @property string $type
 * @property int $quantity
 * @property string $price
 * @property string $date
 * @property int $movable_id
 * @property string $movable_type
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|Eloquent $movable
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Movement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereMovableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereMovableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movement whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\ProductWarehouse|null $productWarehouse
 */
	class Movement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|array<SpatiePermission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PriceHistory
 *
 * @property int $id
 * @property int $product_id
 * @property int $warehouse_id
 * @property int $cost
 * @property string $effective_date
 * @property string $expiry_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereEffectiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceHistory whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class PriceHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Printer
 *
 * @property int $id
 * @property string $name
 * @property string $connection_type
 * @property string $capability_profile
 * @property string|null $char_per_line
 * @property string|null $ip_address
 * @property string|null $port
 * @property string|null $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Printer advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereCapabilityProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereCharPerLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereConnectionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Printer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $category_id
 * @property int|null $warehouse_id
 * @property int|null $brand_id
 * @property string $name
 * @property string|null $code
 * @property string|null $barcode_symbology
 * @property int $quantity
 * @property int $cost
 * @property int $price
 * @property string|null $unit
 * @property int $stock_alert
 * @property int|null $order_tax
 * @property string|null $note
 * @property int|null $status
 * @property int|null $tax_type
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Category $category
 * @property mixed $product_cost
 * @property mixed $product_price
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|array<\Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product stockValue(\Illuminate\Support\Carbon $date)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBarcodeSymbology($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStockAlert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWarehouseId($value)
 * @property string $uuid
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUuid($value)
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @property int $featured
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFeatured($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Movement> $movements
 * @property-read int|null $movements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PriceHistory> $priceHistory
 * @property-read int|null $price_history_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductWarehouse> $warehouses
 * @property-read int|null $warehouses_count
 * @mixin \Eloquent
 * @property-read mixed $average_cost
 * @property-read mixed $average_price
 * @property-read mixed $total_quantity
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductWarehouse
 *
 * @property int $id
 * @property int $product_id
 * @property int $warehouse_id
 * @property float $qty
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse whereWarehouseId($value)
 * @mixin \Eloquent
 * @property int $price
 * @property int $cost
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWarehouse wherePrice($value)
 */
	class ProductWarehouse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Purchase
 *
 * @property int $id
 * @property string $date
 * @property string $reference
 * @property int|null $supplier_id
 * @property int $tax_percentage
 * @property int $tax_amount
 * @property int $discount_percentage
 * @property int $discount_amount
 * @property int $shipping_amount
 * @property int $total_amount
 * @property int $paid_amount
 * @property int $due_amount
 * @property string $status
 * @property string $payment_status
 * @property string $payment_method
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\PurchaseDetail> $purchaseDetails
 * @property-read int|null $purchase_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\PurchasePayment> $purchasePayments
 * @property-read int|null $purchase_payments_count
 * @property-read \App\Models\Supplier|null $supplier
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase completed()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereShippingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedAt($value)
 * @property string $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUuid($value)
 * @property int $user_id
 * @property int|null $warehouse_id
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereWarehouseId($value)
 * @property string|null $document
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase thisMonth()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDocument($value)
 * @mixin \Eloquent
 */
	class Purchase extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseDetail
 *
 * @property int $id
 * @property int $purchase_id
 * @property int|null $product_id
 * @property string $name
 * @property string $code
 * @property int $quantity
 * @property int $price
 * @property int $unit_price
 * @property int $sub_total
 * @property int $product_discount_amount
 * @property string $product_discount_type
 * @property int $product_tax_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Purchase $purchase
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereProductDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereProductDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereProductTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereUpdatedAt($value)
 * @property int|null $warehouse_id
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseDetail whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class PurchaseDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchasePayment
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $amount
 * @property string $date
 * @property string $reference
 * @property string $payment_method
 * @property string|null $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Purchase $purchase
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment byPurchase()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereDeletedAt($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereUserId($value)
 * @mixin \Eloquent
 */
	class PurchasePayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseReturn
 *
 * @property int $id
 * @property string $date
 * @property string $reference
 * @property int|null $supplier_id
 * @property int $tax_percentage
 * @property int $tax_amount
 * @property int $discount_percentage
 * @property int $discount_amount
 * @property int $shipping_amount
 * @property int $total_amount
 * @property int $paid_amount
 * @property int $due_amount
 * @property string $status
 * @property string $payment_status
 * @property string $payment_method
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\PurchaseReturnDetail> $purchaseReturnDetails
 * @property-read int|null $purchase_return_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\PurchaseReturnPayment> $purchaseReturnPayments
 * @property-read int|null $purchase_return_payments_count
 * @property-read \App\Models\Supplier|null $supplier
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn completed()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereShippingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereDeletedAt($value)
 * @property int $user_id
 * @property int|null $warehouse_id
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class PurchaseReturn extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseReturnDetail
 *
 * @property int $id
 * @property int $purchase_return_id
 * @property int|null $product_id
 * @property string $name
 * @property string $code
 * @property int $quantity
 * @property int $price
 * @property int $unit_price
 * @property int $sub_total
 * @property int $discount_amount
 * @property string $discount_type
 * @property int $tax_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $product_discount_amount
 * @property-read mixed $product_tax_amount
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\PurchaseReturn $purchaseReturn
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail wherePurchaseReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PurchaseReturnDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseReturnPayment
 *
 * @property int $id
 * @property int $purchase_return_id
 * @property int $amount
 * @property string $date
 * @property string $reference
 * @property string $payment_method
 * @property string|null $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\PurchaseReturn $purchaseReturn
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment byPurchaseReturn()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment wherePurchaseReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereUpdatedAt($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnPayment whereUserId($value)
 * @mixin \Eloquent
 */
	class PurchaseReturnPayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Quotation
 *
 * @property int $id
 * @property string $date
 * @property string $reference
 * @property int|null $customer_id
 * @property int $tax_percentage
 * @property int $tax_amount
 * @property int $discount_percentage
 * @property int $discount_amount
 * @property int $shipping_amount
 * @property int $total_amount
 * @property string $status
 * @property string|null $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Customer|null $customer
 * @property-read mixed $due_amount
 * @property-read mixed $paid_amount
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\QuotationDetails> $quotationDetails
 * @property-read int|null $quotation_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereShippingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereDeletedAt($value)
 * @property int $user_id
 * @property int|null $warehouse_id
 * @property string|null $sent_on
 * @property string|null $expires_on
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereExpiresOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereSentOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class Quotation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuotationDetails
 *
 * @property int $id
 * @property int $quotation_id
 * @property int|null $product_id
 * @property string $name
 * @property string $code
 * @property int $quantity
 * @property int $price
 * @property int $unit_price
 * @property int $sub_total
 * @property int $product_discount_amount
 * @property string $product_discount_type
 * @property int $product_tax_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Quotation $quotation
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereProductDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereProductDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereProductTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereQuotationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationDetails whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class QuotationDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RoleUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Role|null $role
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser whereUserId($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoleUser whereDeletedAt($value)
 * @mixin \Eloquent
 */
	class RoleUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sale
 *
 * @property int $id
 * @property string $date
 * @property string $reference
 * @property int|null $customer_id
 * @property int $tax_percentage
 * @property int $tax_amount
 * @property int $discount_percentage
 * @property int $discount_amount
 * @property int $shipping_amount
 * @property int $total_amount
 * @property int $paid_amount
 * @property int $due_amount
 * @property string $status
 * @property string $payment_status
 * @property string $payment_method
 * @property string|null $shipping_status
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\SaleDetails> $saleDetails
 * @property-read int|null $sale_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\SalePayment> $salePayments
 * @property-read int|null $sale_payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Sale advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale completed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale salesTotal(\Illuminate\Support\Carbon $date, int $dividedNumber = 100)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereShippingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereShippingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUpdatedAt($value)
 * @property string $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUuid($value)
 * @property int $user_id
 * @property int|null $warehouse_id
 * @property string|null $payment_date
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereWarehouseId($value)
 * @property string|null $document
 * @method static \Illuminate\Database\Eloquent\Builder|Sale thisMonth()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDocument($value)
 * @mixin \Eloquent
 */
	class Sale extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaleDetails
 *
 * @property int $id
 * @property int $sale_id
 * @property int|null $product_id
 * @property string $name
 * @property string $code
 * @property int $quantity
 * @property int $price
 * @property int $unit_price
 * @property int $sub_total
 * @property int $product_discount_amount
 * @property string $product_discount_type
 * @property int $product_tax_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Sale $sale
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereProductDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereProductDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereProductTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereUpdatedAt($value)
 * @property int|null $warehouse_id
 * @method static \Illuminate\Database\Eloquent\Builder|SaleDetails whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class SaleDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SalePayment
 *
 * @property int $id
 * @property int $sale_id
 * @property int $amount
 * @property string $date
 * @property string $reference
 * @property string $payment_method
 * @property string|null $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Sale $sale
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment bySale()
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereDeletedAt($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|SalePayment whereUserId($value)
 * @mixin \Eloquent
 */
	class SalePayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaleReturn
 *
 * @property int $id
 * @property string $date
 * @property string $reference
 * @property int|null $customer_id
 * @property int $tax_percentage
 * @property int $tax_amount
 * @property int $discount_percentage
 * @property int $discount_amount
 * @property int $shipping_amount
 * @property int $total_amount
 * @property int $paid_amount
 * @property int $due_amount
 * @property string $status
 * @property string $payment_status
 * @property string $payment_method
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\SaleReturnDetail> $saleReturnDetails
 * @property-read int|null $sale_return_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\SaleReturnPayment> $saleReturnPayments
 * @property-read int|null $sale_return_payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn completed()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereShippingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereDeletedAt($value)
 * @property int $user_id
 * @property int|null $warehouse_id
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class SaleReturn extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaleReturnDetail
 *
 * @property int $id
 * @property int $sale_return_id
 * @property int|null $product_id
 * @property string $name
 * @property string $code
 * @property int $quantity
 * @property int $price
 * @property int $unit_price
 * @property int $sub_total
 * @property int $discount_amount
 * @property string $discount_type
 * @property int $tax_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $product_discount_amount
 * @property-read mixed $product_tax_amount
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\SaleReturnPayment $saleReturn
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereSaleReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class SaleReturnDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaleReturnPayment
 *
 * @property int $id
 * @property int $sale_return_id
 * @property int $amount
 * @property string $date
 * @property string $reference
 * @property string $payment_method
 * @property string|null $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\SaleReturn $saleReturn
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment bySaleReturn()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereSaleReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereUpdatedAt($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnPayment whereUserId($value)
 * @mixin \Eloquent
 */
	class SaleReturnPayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $company_name
 * @property string $company_email
 * @property string $company_phone
 * @property string|null $company_logo
 * @property int $default_currency_id
 * @property string $default_currency_position
 * @property string $company_address
 * @property int|null $default_client_id
 * @property int|null $default_warehouse_id
 * @property string $default_language
 * @property int $is_invoice_footer
 * @property string|null $invoice_footer
 * @property string|null $company_tax
 * @property int $is_rtl
 * @property string $sale_prefix
 * @property string $purchase_prefix
 * @property string $quotation_prefix
 * @property string $salepayment_prefix
 * @property string $purchasepayment_prefix
 * @property int $show_email
 * @property int $show_address
 * @property int $show_order_tax
 * @property int $show_discount
 * @property int $show_shipping
 * @property string $receipt_printer_type
 * @property int|null $printer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Currency|null $currency
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCompanyAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCompanyEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCompanyTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDefaultClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDefaultCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDefaultCurrencyPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDefaultLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDefaultWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereFooterText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInvoiceFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereIsInvoiceFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereIsRtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereNotificationEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePrinterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePurchasePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePurchasepaymentPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereQuotationPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereReceiptPrinterType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSalePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSalepaymentPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereShowAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereShowDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereShowEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereShowOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereShowShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSiteLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @property string|null $invoice_header
 * @property int $backup_status
 * @property string|null $backup_schedule
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereBackupSchedule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereBackupStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCompanyLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInvoiceHeader($value)
 * @property string $default_date_format
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDefaultDateFormat($value)
 * @property string|null $telegram_channel
 * @property string|null $invoice_footer_text
 * @property string $saleReturn_prefix
 * @property string $purchaseReturn_prefix
 * @property string $salePayment_prefix
 * @property string $purchasePayment_prefix
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInvoiceFooterText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePurchasePaymentPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePurchaseReturnPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSalePaymentPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSaleReturnPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTelegramChannel($value)
 * @mixin \Eloquent
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shipment
 *
 * @property-read \App\Models\Sale $sale
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment query()
 * @mixin \Eloquent
 */
	class Shipment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Supplier
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $country
 * @property string|null $tax_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Purchase|null $purchases
 * @property-read \App\Models\Wallet|null $wallet
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereTaxNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereUpdatedAt($value)
 * @property string $uuid
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereUuid($value)
 * @method static \Database\Factories\SupplierFactory factory($count = null, $state = [])
 * @property-read mixed $debit
 * @property-read mixed $total_due
 * @property-read mixed $total_payments
 * @property-read mixed $total_purchase_returns
 * @property-read mixed $total_purchases
 * @mixin \Eloquent
 */
	class Supplier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transfer
 *
 * @property int $id
 * @property string $uuid
 * @property string $reference
 * @property int $from_warehouse_id
 * @property int $to_warehouse_id
 * @property int $item
 * @property float $total_qty
 * @property float $total_tax
 * @property float $total_cost
 * @property float $total_amount
 * @property float|null $shipping
 * @property string|null $document
 * @property int $status
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Warehouse|null $fromWarehouse
 * @property-read \App\Models\Warehouse|null $toWarehouse
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereFromWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereToWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUuid($value)
 */
	class Transfer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Upload
 *
 * @property int $id
 * @property string $folder
 * @property string $filename
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|array<\Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload query()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereFolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Upload extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $avatar
 * @property string|null $phone
 * @property int $role_id
 * @property int $status
 * @property int $is_all_warehouses
 * @property int|null $wallet_id
 * @property int|null $default_client_id
 * @property int|null $default_warehouse_id
 * @property string|null $deleted_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Warehouse> $assignedWarehouses
 * @property-read int|null $assigned_warehouses_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|array<\Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\Wallet|null $wallet
 * @method static Builder|User advancedFilter($data)
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static Builder|User isActive()
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User permission($permissions)
 * @method static Builder|User query()
 * @method static Builder|User role($roles, $guard = null)
 * @method static Builder|User whereAvatar($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereDefaultClientId($value)
 * @method static Builder|User whereDefaultWarehouseId($value)
 * @method static Builder|User whereDeletedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereIsAllWarehouses($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePhone($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereRoleId($value)
 * @method static Builder|User whereStatus($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User whereWalletId($value)
 * @property string $uuid
 * @method static Builder|User whereUuid($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserWarehouse
 *
 * @property int $user_id
 * @property int $warehouse_id
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Warehouse> $assignedWarehouses
 * @property-read int|null $assigned_warehouses_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserWarehouse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWarehouse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWarehouse query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWarehouse whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWarehouse whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class UserWarehouse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Wallet
 *
 * @property int $id
 * @property string|null $recieved_amount
 * @property string|null $sent_amount
 * @property string|null $balance
 * @property int|null $user_id
 * @property int|null $customer_id
 * @property int|null $supplier_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer|null $customer
 * @property-read \App\Models\Supplier|null $supplier
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereRecievedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereSentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereUserId($value)
 * @mixin \Eloquent
 */
	class Wallet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Warehouse
 *
 * @property int $id
 * @property string $name
 * @property string|null $city
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $country
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\User> $assignedUsers
 * @property-read int|null $assigned_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection|array<\App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse query()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $stock_value
 * @property-read mixed $total_quantity
 */
	class Warehouse extends \Eloquent {}
}

