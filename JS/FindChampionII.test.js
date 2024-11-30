/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findChampion } from './FindChampionII.js'

TEST('Starting FindChampionII test...', (t) => {
    //Test 1
    let want = 0
    let got = findChampion( 3, [[0,1],[1,2]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = findChampion( 4, [[0,2],[1,3],[1,2]] )
    t.assert( want == got, "Expect: "+want)

    t.end()
})
