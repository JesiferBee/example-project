 <form method="POST" action="/form/store">
                            @csrf

 
                            <div>
                                <label for="name">Full name</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Your name" required>