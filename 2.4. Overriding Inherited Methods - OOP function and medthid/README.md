<h1>ওভাররাইডিং ইনহেরিটেড মেথড (Overriding Inherited Methods)</h1>

<p>ওভাররাইডিং ইনহেরিটেড মেথড হলো এমন একটি প্রক্রিয়া, যেখানে একটি <strong>subclass</strong> তার <strong>parent class</strong> থেকে প্রাপ্ত বা ইনহেরিট করা কোনো মেথডকে নতুনভাবে সংজ্ঞায়িত করে। অর্থাৎ, parent class থেকে প্রাপ্ত মেথডটি subclass-এ প্রয়োজনে পরিবর্তন করে ব্যবহার করা হয়।</p>

<h2>ওভাররাইডিং-এর কাজ কীভাবে হয়?</h2>

<p>যখন একটি subclass তার parent class থেকে মেথড ইনহেরিট করে, সেই মেথডটি সরাসরি subclass এ ব্যবহার করা যায়। তবে কোনো ক্ষেত্রে subclass-এর জন্য সেই মেথডের আচরণ ভিন্ন হতে পারে। এমন পরিস্থিতিতে subclass সেই মেথডটি আবার নতুনভাবে সংজ্ঞায়িত বা ওভাররাইড করতে পারে।</p>

<h3>উদাহরণ</h3>

<p>ধরুন, একটি <code>Animal</code> ক্লাস আছে, যেখানে একটি <code>speak()</code> মেথড আছে যা সাধারণভাবে কোনো প্রাণীর আওয়াজ প্রকাশ করে। এখন যদি <code>Dog</code> এবং <code>Cat</code> নামে দুটি subclass তৈরি করা হয়, তারা <code>Animal</code> ক্লাস থেকে <code>speak()</code> মেথডটি ইনহেরিট করবে। কিন্তু কুকুর ও বিড়ালের আওয়াজ ভিন্ন হওয়ায়, <code>Dog</code> এবং <code>Cat</code> ক্লাসে সেই মেথডটি ওভাররাইড করা হবে।</p>

<h4>উদাহরণ কোড:</h4>

<p>
<code>class Animal {<br>
&nbsp;&nbsp;&nbsp;&nbsp;public void speak() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("প্রাণী আওয়াজ করছে");<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
}<br><br>
class Dog extends Animal {<br>
&nbsp;&nbsp;&nbsp;&nbsp;@Override<br>
&nbsp;&nbsp;&nbsp;&nbsp;public void speak() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("কুকুর ঘেউ ঘেউ করছে");<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
}<br><br>
class Cat extends Animal {<br>
&nbsp;&nbsp;&nbsp;&nbsp;@Override<br>
&nbsp;&nbsp;&nbsp;&nbsp;public void speak() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("বিড়াল মিউ মিউ করছে");<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
}</code>
</p>

<h4>ওভাররাইডিং-এর সুবিধা:</h4>

<h5>১. বিশেষায়িত আচরণ</h5>
<p>একটি subclass তার নিজস্ব প্রয়োজন অনুযায়ী parent class-এর মেথডের আচরণ পরিবর্তন করতে পারে।</p>

<h5>২. কোড পুনরায় ব্যবহার</h5>
<p>একই নামের মেথড ব্যবহার করে subclass গুলো আলাদা কাজ করতে পারে, ফলে কোডের পুনরাবৃত্তি কমে।</p>

<h5>৩. পলিমরফিজম</h5>
<p>ওভাররাইডিং-এর মাধ্যমে parent এবং subclass-এর মধ্যে পলিমরফিজম অর্জন করা যায়, যা Object-Oriented Programming (OOP)-এর একটি গুরুত্বপূর্ণ বৈশিষ্ট্য।</p>

<h4>সারাংশ</h4>

<p>ওভাররাইডিং ইনহেরিটেড মেথড হলো subclass-এর নিজস্ব চাহিদা অনুযায়ী parent class-এর মেথডকে পুনরায় সংজ্ঞায়িত করার একটি উপায়। এটি কোডের পুনরায় ব্যবহার এবং বিশেষায়িত আচরণ তৈরি করতে গুরুত্বপূর্ণ ভূমিকা পালন করে।</p>
