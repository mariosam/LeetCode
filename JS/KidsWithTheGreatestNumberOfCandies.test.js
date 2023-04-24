/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { kidsWithCandies } from './KidsWithTheGreatestNumberOfCandies.js'

TEST('Starting KidsWithTheGreatestNumberOfCandies test...', (t) => {
    //Test 1
    let want = [true,true,true,false,true]
    let got = kidsWithCandies( [2,3,5,1,3], 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [true,false,false,false,false]
    got = kidsWithCandies( [4,2,1,1,2], 1 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = [true,false,true]
    got = kidsWithCandies( [12,1,12], 10 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
