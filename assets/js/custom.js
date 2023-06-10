$(document).ready(function(){
    let first_state = false;
    let second_state = false;
    let third_state = false;
    let forth_state = false;
    let fifth_state = false;
    let sixth_state = false;

    $('#first_quiz').on('click', function(){
        if(first_state) {
            $('#first_answer').slideUp();
            $(this).css('rotate', '45deg');
        } 
        else {
            $('#first_answer').slideDown();
            $(this).css('rotate', '135deg')
        } 
        first_state = !first_state;
    })

    $('#second_quiz').on('click', function(){
        if(second_state) {
            $('#second_answer').slideUp();
            $(this).css('rotate', '45deg');
        } 
        else {
            $('#second_answer').slideDown();
            $(this).css('rotate', '135deg')
        } 
        second_state = !second_state;
    })
    $('#third_quiz').on('click', function(){
        if(third_state) {
            $('#third_answer').slideUp();
            $(this).css('rotate', '45deg');
        } 
        else {
            $('#third_answer').slideDown();
            $(this).css('rotate', '135deg')
        } 
        third_state = !third_state;
    })
    $('#forth_quiz').on('click', function(){
        if(forth_state) {
            $('#forth_answer').slideUp();
            $(this).css('rotate', '45deg');
        } 
        else {
            $('#forth_answer').slideDown();
            $(this).css('rotate', '135deg')
        } 
        forth_state = !forth_state;
    })
    $('#fifth_quiz').on('click', function(){
        if(fifth_state) {
            $('#fifth_answer').slideUp();
            $(this).css('rotate', '45deg');
        } 
        else {
            $('#fifth_answer').slideDown();
            $(this).css('rotate', '135deg')
        } 
        fifth_state = !fifth_state;
    })
    $('#sixth_quiz').on('click', function(){
        if(sixth_state) {
            $('#sixth_answer').slideUp();
            $(this).css('rotate', '45deg');
        } 
        else {
            $('#sixth_answer').slideDown();
            $(this).css('rotate', '135deg')
        } 
        sixth_state = !sixth_state;
    })
})