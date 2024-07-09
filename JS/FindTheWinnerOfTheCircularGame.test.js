/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findTheWinner } from './FindTheWinnerOfTheCircularGame.js'

TEST('Starting FindTheWinnerOfTheCircularGame test...', (t) => {
    //Test 1
    let want = 3
    let got = findTheWinner( 5, 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = findTheWinner( 6, 5 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
