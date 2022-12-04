<?php

namespace App\Http\Controllers\Administrator\cats\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */    
    public function __invoke(Request $request)
    {
        $cat = Cat::where('id', $request->id)->firstOrFail();

        DB::transaction( function () use($request, $cat) {
            $cat->name = $request->input('name');
            $cat->birthday = $request->input('birthday');
            $cat->cats_type = $request->input('cats_type');
            $cat->introduction = $request->input('introduction');
            $requestPhoto = $request->file('photo_URL');

            if ( !is_null($cat->photo_URL) ) {
                if(!is_null($requestPhoto)){
                    Storage::disk('public')->delete('images/' . $cat->photo_URL);
                    $cat->photo_URL = $requestPhoto->hashName();
                    $this->putImageToStorage($requestPhoto); 
                }                
            }else{
                $cat->photo_URL = $requestPhoto->hashName();
                $this->putImageToStorage($requestPhoto); 
            }
            
            $cat->Instagram_URL = $request->input('Instagram_URL');
            $cat->save();               
        });

        return redirect()->route('administrator.cats.update.index', ['id' => $cat->id])
        ->with('feedback.success', "プロフィールを編集しました");
    }

    private function putImageToStorage($image)
    {
        Storage::putFile('public/images', $image);
    }

}
