<div class="{{ $wrapperClass ?? '' }} mockup-shell">

    {{-- Title bar with traffic-light dots --}}
    <div class="mockup-titlebar">
        <div class="flex gap-2">
            <div class="mockup-dot bg-[#ff5f56]"></div>
            <div class="mockup-dot bg-[#ffbd2e]"></div>
            <div class="mockup-dot bg-[#27c93f]"></div>
        </div>
        <div class="text-gray-400 text-xs flex gap-4">
            <span class="flex items-center gap-1">
                <div class="w-2 h-2 rounded-full bg-blue-400"></div> Arda
            </span>
            <span class="flex items-center gap-1">
                <div class="w-2 h-2 rounded-full bg-amber-500"></div> Aji
            </span>
            <span class="flex items-center gap-1">
                <div class="w-2 h-2 rounded-full bg-emerald-400"></div> Agent
            </span>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row flex-1">

        {{-- Code pane --}}
        <div class="mockup-code-pane">
            <div><span class="text-pink-400">public</span> <span class="text-blue-400">function</span> <span class="text-yellow-200">authenticate</span>(<span class="text-orange-300">Request</span> <span class="text-blue-200">$request</span>) {</div>
            <div class="pl-8 text-gray-500 italic">// Validate incoming request</div>
            <div class="pl-8"><span class="text-blue-200">$credentials</span> = <span class="text-blue-200">$request</span>-><span class="text-yellow-200">validate</span>([</div>
            <div class="pl-16"><span class="text-green-300">'email'</span> => <span class="text-green-300">'required|email'</span>,</div>
            <div class="pl-16"><span class="text-green-300">'password'</span> => <span class="text-green-300">'required'</span></div>
            <div class="pl-8">]);</div>
            <br>
            <div class="pl-8 text-gray-500 italic">// Check credentials</div>
            <div class="pl-8 relative inline-block">
                <span class="text-pink-400">if</span> (<span class="text-teal-400">Auth</span>::<span class="text-yellow-200">attempt</span>(<span class="text-blue-200">$credentials</span>)) {
                <span class="absolute top-0 left-[-4px] w-[2px] h-5 bg-blue-400 animate-pulse"></span>
                <span class="absolute -top-5 left-0 bg-blue-400 text-white text-[10px] font-sans px-2 py-0.5 rounded shadow">Arda</span>
            </div>
            <div class="pl-16"><span class="text-blue-200">$request</span>-><span class="text-yellow-200">session</span>()-><span class="text-yellow-200">regenerate</span>();</div>
            <div class="pl-16 relative mt-2">
                <span class="text-pink-400">return</span> <span class="text-yellow-200">redirect</span>()->
                <span class="inline-block w-[2px] h-4 bg-amber-500 animate-pulse align-middle ml-1"></span>
                <span class="absolute -top-5 left-32 bg-amber-500 text-white text-[10px] font-sans px-2 py-0.5 rounded shadow z-10 whitespace-nowrap">Aji is typing...</span>
            </div>
            <div class="pl-8">}</div>
            <div class="pl-8"><span class="text-pink-400">return</span> <span class="text-yellow-200">back</span>()-><span class="text-yellow-200">withErrors</span>([<span class="text-green-300">'email'</span> => <span class="text-green-300">'Invalid login.'</span>]);</div>
            <div>}</div>
        </div>

        {{-- Chat pane --}}
        <div class="mockup-chat-pane">

            {{-- Chat header --}}
            <div class="mockup-chat-header">
                <span class="font-semibold flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Chat
                </span>
                <div class="flex items-center gap-2 text-gray-400">
                    <button class="hover:text-white" title="New Chat">+</button>
                    <button class="hover:text-white" title="Close">×</button>
                </div>
            </div>

            {{-- Messages --}}
            <div class="mockup-chat-messages">
                <div class="flex gap-2 items-start">
                    <div class="w-6 h-6 rounded-full bg-blue-600 flex items-center justify-center text-white text-[10px] font-bold shrink-0">A</div>
                    <div class="mockup-msg-bubble">
                        <p class="text-[11px] text-gray-400 font-semibold">Arda</p>
                        <p>Can we make sure the session regeneration is protected against fixation?</p>
                    </div>
                </div>
                <div class="flex gap-2 items-start">
                    <div class="w-6 h-6 rounded-full bg-emerald-600 flex items-center justify-center text-white text-[10px] font-bold shrink-0">AI</div>
                    <div class="mockup-msg-bubble--agent">
                        <p class="text-[11px] text-emerald-400 font-semibold flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span> Agent Copilot
                        </p>
                        <p class="text-gray-300">Yes! Laravel's <code class="bg-[#1e1e1e] px-1 py-0.5 rounded text-pink-400 font-mono text-[10px]">Auth::attempt()</code> handles session regeneration safely out of the box.</p>
                    </div>
                </div>
            </div>

            {{-- Input --}}
            <div class="mockup-chat-footer">
                <div class="mockup-chat-input">
                    <input type="text" placeholder="Ask Copilot or type @/..." class="bg-transparent text-gray-200 text-xs focus:outline-none placeholder-gray-500 font-sans" readonly />
                    <div class="flex justify-between items-center text-[10px] text-gray-400 pt-1 border-t border-gray-800">
                        <span class="flex gap-2">
                            <button class="hover:text-white flex items-center gap-1 bg-[#2d2d2d] px-1.5 py-0.5 rounded">@code</button>
                            <button class="hover:text-white flex items-center gap-1 bg-[#2d2d2d] px-1.5 py-0.5 rounded">#file</button>
                        </span>
                        <button class="bg-blue-600 text-white px-2 py-0.5 rounded hover:bg-blue-500 transition">Send</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>