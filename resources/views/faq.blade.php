@include('common.header')
<style>
.questions {
	padding:0px;
	padding-left:10px;
	padding-right:10px;
}
</style>
        <section class="about-page">
            <div class="container">
                <span class="form_title">Questions</span>
                <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr>
                        <td width="430" height="200" valign="top">
			  	@php $i = 0 @endphp
                @foreach ($faqs as $faq)
				@php $i++ @endphp
							<div class="white questions">
                                <a href="#Q{{ $i }}">{{ $i }}, {{$faq->question}}</a><br />
                            </div>
				@endforeach
                <span class="form_title"></span>
                <span class="form_title">Answers</span>
			  	@php $i = 0 @endphp
                @foreach ($faqs as $faq)
				@php $i++ @endphp
                            <div class="white"> <b><a id="Q{{ $i }}">{{$faq->question}}</a></b><br />
                                @php echo $faq->answer @endphp
                                </a>
                            </div>
				@endforeach
                             
                             
                        </td>
                    </tr>
                </table>
            </div>
        </section>
@include('common.footer')