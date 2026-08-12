/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { winnerSquareGame } from './StoneGameIV.js'

TEST('Starting StoneGameIV test...', (t) => {
    //Test 1
    let want = true
    let got = winnerSquareGame(1)
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = false
    got = winnerSquareGame(2)
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = true
    got = winnerSquareGame(4)
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
 
