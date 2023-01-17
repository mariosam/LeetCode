/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} tasks
 * @return {number}
 */
function minimumRounds(tasks) {
    tasks.sort();
    let group = 1;
    let rounds = 0;

    if ( tasks.length==1 ) return -1;

    for ( let i=1; i < tasks.length; i++ ) {
        //se for igual ao anterior
        if ( tasks[i] == tasks[i-1] ) {
            group++;
        } else {
            //impossivel completar as tarefas
            if ( group == 1 ) return -1;
            //verifica a contagem do grupo
            rounds += checkRounds(group);
            //reinicia contagem
            group = 1;
        }
    }
    //verifica ultimo grupo
    if ( group == 1 ) return -1;
    rounds += checkRounds(group);

    return rounds;
}

function checkRounds(group) {
    if ( group % 3 == 0 ) return group/3;

    for ( let i=group; i > -1; i=i-2 ) {
        if ( i % 3 == 0 ) return ((i/3) + (group-i)/2);
    }

    return group/2;
}
export { minimumRounds }
