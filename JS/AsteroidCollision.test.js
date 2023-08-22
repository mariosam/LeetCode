/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { asteroidCollision } from './AsteroidCollision.js'

TEST('Starting AsteroidCollision test...', (t) => {
    //Test 1
    let want = [5,10]
    let got = asteroidCollision( [5,10,-5] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = []
    got = asteroidCollision( [8,-8] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = [10]
    got = asteroidCollision( [10,2,-5] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
