<?php

namespace Svr\Directories\Controllers\Api;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Svr\Core\Exceptions\CustomException;
use Svr\Core\Resources\SvrApiResponseResource;
use Svr\Data\Resources\SvrApiBreedsListResource;
use Svr\Data\Resources\SvrApiCountriesListResource;
use Svr\Data\Resources\SvrApiDistrictsListResource;
use Svr\Data\Resources\SvrApiGendersListResource;
use Svr\Data\Resources\SvrApiKeepingPurposesListResource;
use Svr\Data\Resources\SvrApiKeepingTypesListResource;
use Svr\Data\Resources\SvrApiMarkStatusesListResource;
use Svr\Data\Resources\SvrApiMarkTypesListResource;
use Svr\Data\Resources\SvrApiOutBasisesListResource;
use Svr\Data\Resources\SvrApiOutTypesListResource;
use Svr\Data\Resources\SvrApiRegionsListResource;
use Svr\Data\Resources\SvrApiSpeciesListResource;
use Svr\Data\Resources\SvrApiToolsLocationsListResource;
use Svr\Data\Resources\SvrApiToolTypesListResource;
use Svr\Directories\Models\DirectoryAnimalsBreeds;
use Svr\Directories\Models\DirectoryAnimalsSpecies;
use Svr\Directories\Models\DirectoryCountries;
use Svr\Directories\Models\DirectoryCountriesRegion;
use Svr\Directories\Models\DirectoryCountriesRegionsDistrict;
use Svr\Directories\Models\DirectoryGenders;
use Svr\Directories\Models\DirectoryKeepingPurposes;
use Svr\Directories\Models\DirectoryKeepingTypes;
use Svr\Directories\Models\DirectoryMarkStatuses;
use Svr\Directories\Models\DirectoryMarkToolTypes;
use Svr\Directories\Models\DirectoryMarkTypes;
use Svr\Directories\Models\DirectoryOutBasises;
use Svr\Directories\Models\DirectoryOutTypes;
use Svr\Directories\Models\DirectoryToolsLocations;

class ApiDirectoriesController extends Controller
{
    /**
     * Справочники видов животных
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesSpecies(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'specie_name' => ['string'],
        ],
        [
            'specie_name' => trans('svr-core-lang::validation')
        ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryAnimalsSpecies::speciesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены виды животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'species_list' =>collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiSpeciesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники пород животных
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesBreeds(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'specie_id'     => ['int', Rule::exists(DirectoryAnimalsSpecies::getTableName(), 'specie_id')],
                'breed_name'    => ['string'],
            ],
            [
                'specie_id'     => trans('svr-core-lang::validation'),
                'breed_name'    => trans('svr-core-lang::validation')
            ]
        );

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryAnimalsBreeds::breedsList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены породы животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'breeds_list' =>collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiBreedsListResource::class,
            'response_resource_dictionary' => false
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники стран
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesCountries(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'country_name' => ['string'],
            ],
            [
                'country_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryCountries::countriesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены страны');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'countries_list' =>collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiCountriesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники регионов
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesRegions(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'country_id'     => ['int', Rule::exists(DirectoryCountries::getTableName(), 'country_id')],
                'region_name'    => ['string'],
            ],
            [
                'country_id'     => trans('svr-core-lang::validation'),
                'region_name'    => trans('svr-core-lang::validation')
            ]
        );

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryCountriesRegion::regionsList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены регионы');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'regions_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiRegionsListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники районов
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesDistricts(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'region_id'     => ['int', Rule::exists(DirectoryCountriesRegion::getTableName(), 'region_id')],
                'district_name' => ['string'],
            ],
            [
                'region_id'     => trans('svr-core-lang::validation'),
                'district_name' => trans('svr-core-lang::validation')
            ]
        );

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryCountriesRegionsDistrict::districtsList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены районы');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'districts_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiDistrictsListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники причин содержания животных
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesKeepingPurposes(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'keeping_purpose_name' => ['string'],
            ],
            [
                'keeping_purpose_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryKeepingPurposes::keepingPurposesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены причины содержания животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'keeping_purposes_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiKeepingPurposesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники типов содержания животных
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesKeepingTypes(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'keeping_type_name' => ['string'],
            ],
            [
                'keeping_type_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryKeepingTypes::keepingTypesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены типы содержания животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'keeping_types_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiKeepingTypesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники мест нанесения средств маркирования
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesToolsLocations(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'tool_location_name' => ['string'],
            ],
            [
                'tool_location_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryToolsLocations::toolsLocationsList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены места нанесения средств маркирования');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'tools_locations_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiToolsLocationsListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники полов животных
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesGenders(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'gender_name' => ['string'],
            ],
            [
                'gender_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryGenders::gendersList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены гендеры животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'genders_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiGendersListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники оснований выбытия
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesOutBasises(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'out_basis_name' => ['string'],
            ],
            [
                'out_basis_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryOutBasises::outBasisesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены основания выбытия животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'out_basises_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiOutBasisesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники видов выбытия
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesOutTypes(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'out_type_name' => ['string'],
            ],
            [
                'out_type_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryOutTypes::outTypesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены виды выбытия');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'out_types_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiOutTypesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники статусов маркирования
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesMarkStatuses(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'mark_status_name' => ['string'],
            ],
            [
                'mark_status_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryMarkStatuses::markStatusesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены статусы маркирования');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'mark_statuses_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiMarkStatusesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники видов средств маркирования
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesMarkToolTypes(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'mark_tool_type_name' => ['string'],
            ],
            [
                'mark_tool_type_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryMarkToolTypes::markToolTypesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены виды средств маркирования');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'mark_tool_types_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiToolTypesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники видов маркирования
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesMarkTypes(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'mark_type_name' => ['string'],
            ],
            [
                'mark_type_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $items_list = DirectoryMarkTypes::markTypesList(Config::get('per_page'), Config::get('cur_page'), $valid_data);

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены виды маркирования');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'mark_types_list' => collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiMarkTypesListResource::class,
            'response_resource_dictionary' => false,
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }
}
