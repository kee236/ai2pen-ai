<div class="tab-pane fade" id="v-pills-general-settings" role="tabpanel" aria-labelledby="v-pills-general-settings-tab">

                                    @if (session('save_bot_configuration_status')=='1')

                                        <div class="alert alert-success">

                                            <h4 class="alert-heading">{{__('Successful')}}</h4>

                                            <p> {{ __('Settings have been saved successfully.') }}</p>

                                        </div>

                                    @endif

                                    <form action="{{route('meta-bot-configuration-action').'?media_type='.$media_type}}" method="post">

                                        @csrf

                                        <div class="row">

                                            <?php $chat_human_email = $media_type=='ig' ? $bot_info[0]->ig_chat_human_email : $bot_info[0]->chat_human_email;?>

                                            <div class="section mb-2">

                                                <h6 class="section-title">{{__('General')}}</h6>

                                                <p><i>{{__('Chat with human action email address and no-match reply')}}</i></p>

                                            </div>

                                            <div class="form-group col-12 col-md-6">

                                                <label>{{__('Chat with human email')}}</label>

                                                <input type="text" class="form-control" name="chat_human_email" id="chat_human_email" value="{{$chat_human_email}}">

                                                @if ($errors->has('chat_human_email'))

                                                    <span class="text-danger"> {{ $errors->first('chat_human_email') }} </span>

                                                @endif

                                            </div>

                                            <div class="row">

                                                <?php $no_match_found_reply_enabled = $media_type=='ig' ? $bot_info[0]->ig_no_match_found_reply_enabled : $bot_info[0]->no_match_found_reply_enabled; ?>

                                                <div class="form-group col-6">

                                                    <label for="no_match_found_reply">{{__('No Match Reply')}}</label>

                                                    <div class="form-group">

                                                        <div class="input-group">

                                                            <span class="input-group-text pt-2 w-100 bg-white">

                                                                <div class="form-check form-switch">


