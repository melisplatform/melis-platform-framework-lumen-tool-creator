
namespace LumenModule\[module_name]\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class [module_name]Provider extends ServiceProvider
{
    public function boot()
    {
        // load routes in the lumen application
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

    }
}